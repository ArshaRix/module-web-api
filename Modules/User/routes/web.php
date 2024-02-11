<?php

use Illuminate\Support\Facades\Route;

use Modules\User\App\Http\Controllers\UserController;
use Modules\User\App\Http\Controllers\RegisterController;
use Modules\User\App\Http\Controllers\SessionController;

// Route::group([], function () {
//     Route::resource('user', UserController::class)->names('user');
// });

Route::middleware(['guest']) -> group(function () {
    Route::get('/login', [SessionController::class, 'create']) -> name('login');
    Route::post('/login', [SessionController::class, 'store']);
    Route::get('/register', [RegisterController::class, 'create']) -> name('register');
    Route::post('/register', [RegisterController::class, 'store']);
});


Route::middleware(['auth']) -> group(function() {
    Route::post('/logout', [SessionController::class, 'destroy']);
});


Route::get('/home', [UserController::class, 'index']);

