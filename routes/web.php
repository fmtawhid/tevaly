<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('welcome');
});

// API endpoint for fetching placement users
Route::get('/api/placement-users', [RegisteredUserController::class, 'getPlacementUsers']);

// Include User Routes
require __DIR__.'/user.php';

// Include Admin Routes
require __DIR__.'/admin.php';

require __DIR__.'/auth.php';
