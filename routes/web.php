<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Include User Routes
require __DIR__.'/user.php';

// Include Admin Routes
require __DIR__.'/admin.php';

require __DIR__.'/auth.php';
