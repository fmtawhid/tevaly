<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberController extends Controller
{
    /**
     * Store a newly created member under authenticated user.
     */
    public function store(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:users,phone'],
            'password' => ['required', 'string', 'min:8'],
            'position' => ['required', 'in:left,right'],
        ]);

        // Check if position is already taken
        $positionTaken = User::where('parent_id', $user->id)
            ->where('position', $request->position)
            ->exists();

        if ($positionTaken) {
            return back()->withErrors([
                'position' => "The {$request->position} position is already taken. Please choose the other side.",
            ]);
        }

        // Create new member
        $member = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->phone . '@tevaly.local',
            'password' => Hash::make($request->password),
            'referral_code' => 'TVL' . Str::upper(Str::random(8)),
            'sponsor_id' => $user->id,
            'parent_id' => $user->id,
            'position' => $request->position,
            'role' => 'user',
        ]);

        return back()->with('success', "Member {$member->name} added successfully!");
    }
}
