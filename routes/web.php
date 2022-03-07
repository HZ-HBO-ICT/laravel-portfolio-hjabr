<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'show'])->name('page.home');

Route::get('/why', [WhyController::class, 'show'])->name('page.why');

Route::get('/profile', [ProfileController::class, 'show'])->name('page.profile');

Route::get('/dashboard', [DashboardController::class, 'show'])->name('page.dashboard');

Route::get('/faq', [FaqController::class, 'index'])->name('page.faq');

Route::group(['prefix' => 'blog'], function () {
    Route::get('/',[BlogController::class, 'show'])->name('page.blog');
    Route::get('/{id}',[PostsController::class, 'post'])->name('page.blog.post');
});
