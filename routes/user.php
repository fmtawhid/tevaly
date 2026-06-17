<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreeController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    // User Home/Index Page
    Route::get('/home', function () {
        return view('user.index');
    })->middleware('verified')->name('user.home');

    // User Dashboard
    Route::get('/dashboard', function () {
        return view('user.dashboard');
    })->middleware('verified')->name('dashboard');

    // User Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // User Tree View
    Route::get('/tree', [TreeController::class, 'show'])->name('tree.show');

    // Add Member (Direct Referral)
    Route::post('/member/store', [MemberController::class, 'store'])->name('member.store');
});
