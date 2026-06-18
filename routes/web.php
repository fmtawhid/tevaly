<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/travel', [PageController::class, 'travel'])->name('travel');
Route::get('/cars', [PageController::class, 'cars'])->name('cars');

// API endpoint for fetching placement users
Route::get('/api/placement-users', [RegisteredUserController::class, 'getPlacementUsers']);

// Include User Routes
require __DIR__.'/user.php';

// Include Admin Routes
require __DIR__.'/admin.php';

require __DIR__.'/auth.php';
