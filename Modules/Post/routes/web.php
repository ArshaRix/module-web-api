<?php

use Illuminate\Support\Facades\Route;
use Modules\Post\App\Http\Controllers\PostController;

Route::group([], function () {
    Route::resource('post', PostController::class)->names('post');
});
