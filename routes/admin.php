<?php

use App\Http\Controllers\AdminController\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        // Admin Dashboard
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // Admin Users List
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');

        // Admin Network Tree
        Route::get('/tree', [AdminController::class, 'tree'])->name('admin.tree');
    });
});
