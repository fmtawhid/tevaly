<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function registerAndPlace(Request $request)
    {
        // ১. ইনপুট ভ্যালিডেশন
        $request->validate([
            'name' => 'required|string',
            'phone' => 'required|string|unique:users,phone',
            'referral_code' => 'required|exists:users,referral_code', // স্পন্সরের কোড
            'placement_id' => 'required|exists:users,id', // যার নিচে প্লেস হবে তার আইডি
            'position' => 'required|in:left,right' // লেফট নাকি রাইট
        ]);

        // ২. চেক করা— ওই প্লেসমেন্ট প্যারেন্টের নিচে এই পজিশনটি খালি আছে কিনা
        $isPositionTaken = User::where('parent_id', $request->placement_id)
                              ->where('position', $request->position)
                              ->exists();

        if ($isPositionTaken) {
            return response()->json(['error' => 'দুঃখিত, এই পজিশনটি ইতিমধ্যে বুকড হয়ে গেছে!'], 422);
        }

        // ৩. স্পন্সর এবং প্লেসমেন্ট প্যারেন্ট ডেটা খুঁজে বের করা
        $sponsor = User::where('referral_code', $request->referral_code)->first();
        $placementParent = User::find($request->placement_id);

        // ৪. নতুন মেম্বার/ইউজার তৈরি করা
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'referral_code' => 'TVL' . Str::upper(Str::random(5)), // মেম্বারের ইউনিক কোড (যেমন: TVLX5Y7Z)
            'sponsor_id' => $sponsor->id,
            'parent_id' => $placementParent->id,
            'position' => $request->position
        ]);

        return response()->json([
            'success' => 'ইউজার সফলভাবে তৈরি এবং ট্রিতে প্লেসড হয়েছে!',
            'data' => $user
        ], 201);
    }
}