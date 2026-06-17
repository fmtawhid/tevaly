<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'email' => ['nullable', 'string', 'lowercase', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'referral_code' => ['required', 'string', 'exists:users,referral_code'],
            'placement_id' => ['nullable', 'integer', 'exists:users,id'],
        ]);

        // Get sponsor
        try {
            $sponsor = User::where('referral_code', $request->referral_code)->firstOrFail();
        } catch (ModelNotFoundException) {
            return back()->withErrors([
                'referral_code' => 'Invalid referral code.',
            ]);
        }

        // Use sponsor ID if placement_id is not provided
        $parentId = $request->placement_id ?: $sponsor->id;

        // Verify parent exists
        try {
            User::findOrFail($parentId);
        } catch (ModelNotFoundException) {
            return back()->withErrors([
                'placement_id' => 'Invalid placement user.',
            ]);
        }

        // Create user with auto-generated referral code
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'referral_code' => 'TVL' . Str::upper(Str::random(8)),
            'sponsor_id' => $sponsor->id,
            'parent_id' => $parentId,
            'role' => 'user',
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }

    /**
     * Get available placement users for a given referral code
     */
    public function getPlacementUsers(Request $request)
    {
        $referralCode = $request->query('referral_code');
        
        if (!$referralCode) {
            return response()->json(['error' => 'Referral code required'], 400);
        }

        try {
            $sponsor = User::where('referral_code', $referralCode)->firstOrFail();
        } catch (ModelNotFoundException) {
            return response()->json(['error' => 'Invalid referral code'], 404);
        }

        // Get all downline users of the sponsor
        $downlineUsers = $sponsor->getDownlineUsers();

        // Format the users for the dropdown
        $users = $downlineUsers->map(function ($user) {
            return [
                'id' => $user->id,
                'name' => $user->name,
                'downline_count' => $user->countDownline(),
            ];
        });

        return response()->json(['users' => $users->values()->all()]);
    }
}
