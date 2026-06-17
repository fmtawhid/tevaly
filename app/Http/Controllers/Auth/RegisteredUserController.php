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
            'placement_id' => ['required', 'integer', 'exists:users,id'],
            'position' => ['required', 'in:left,right'],
        ]);

        // Verify position is vacant under placement parent
        $positionTaken = User::where('parent_id', $request->placement_id)
            ->where('position', $request->position)
            ->exists();

        if ($positionTaken) {
            return back()->withErrors([
                'position' => 'This position is already taken. Please choose another position or parent.',
            ]);
        }

        // Get sponsor
        try {
            $sponsor = User::where('referral_code', $request->referral_code)->firstOrFail();
        } catch (ModelNotFoundException) {
            return back()->withErrors([
                'referral_code' => 'Invalid referral code.',
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
            'parent_id' => $request->placement_id,
            'position' => $request->position,
            'role' => 'user',
        ]);

        event(new Registered($user));
        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
