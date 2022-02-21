<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/**
 *  Blog routes
 */

Route::group(['prefix' => 'blog'], function () {
    Route::get('/',[BlogController::class, 'show'])->name('page.blog');
    Route::get('{post}',[BlogController::class, 'post'])->name('page.blog.post');
});

