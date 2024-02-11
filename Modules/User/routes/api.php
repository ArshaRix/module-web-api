<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\User\App\Http\Controllers\UserController;


Route::middleware(['auth:sanctum'])->prefix('v1')->name('api.')->group(function () {
    Route::get('user', fn (Request $request) => $request->user())->name('user');
});

// Route::middleware('role:master') -> get('users', function () {
//     Route::get('/', [UserController::class, 'index']);
// });

Route::resource('users', UserController::class);
