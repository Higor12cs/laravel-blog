<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog/posts', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{category:slug}/posts', [BlogController::class, 'postsByCategory'])->name('posts.byCategory');
Route::get('/blog/writer/{user:slug}/posts', [BlogController::class, 'postsByWriter'])->name('posts.byWriter');
Route::get('/blog/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
