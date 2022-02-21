<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\WhyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;

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

//Route::get('/posts/{post}', [WelcomeController::class, 'show']);



//
//Route::get('/posts/{post}', function ($post) {
//    $posts = [
//        'my-first-post' => 'Hello, this is my first blog post!',
//        'my-second-post' => 'Now I am getting the hang of this blogging thing.'
//    ];
//
//    if (!array_key_exists($post, $posts)) {
//        abort(404, 'Sorry, that post was not found.sss');
//    }
//
//    return view('post', [
//        'post' => $posts[$post]
//    ]);
//});

//Route::get('/', function () {
//    return view('welcome');
//});

/**
 * Home page
 * Controller class: WelcomeController
 * method: show()
 */

Route::get('/', [WelcomeController::class, 'show'])->name('page.home');

/**
 * Why page
 * Controller class: WhyController
 * method: show()
 */

Route::get('/why', [WhyController::class, 'show'])->name('page.why');

/**
 * Profile page
 * Controller class: ProfileController
 * method: show()
 */

Route::get('/profile', [ProfileController::class, 'show'])->name('page.profile');

/**
 * Dashboard page
 * Controller class: DashboardController
 * method: show()
 */

Route::get('/dashboard', [DashboardController::class, 'show'])->name('page.dashboard');

/**
 * FAQ page
 * Controller class: FaqController
 * method: show()
 */

Route::get('/faq', [FaqController::class, 'show'])->name('page.faq');
