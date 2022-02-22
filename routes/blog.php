<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;

/**
 *  Blog routes
 */

Route::group(['prefix' => 'blog'], function () {
    Route::get('/',[BlogController::class, 'show'])->name('page.blog');
    Route::get('/{id}',[PostsController::class, 'post'])->name('page.blog.post');
});

