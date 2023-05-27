<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

// Blog
Route::multilingual('/', [HomeController::class, 'index'])->name('home');
Route::multilingual('category', [CategoryController::class, 'show'])->name('category.show');
Route::multilingual('post', [PostController::class, 'show'])->name('post.show');

// Comment
Route::post('comment', [PostController::class, 'comment'])->name('comment');

// Profile
Route::multilingual('profile', [ProfileController::class, 'show'])->name('profile.show');

// Auth

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::multilingual('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::multilingual('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
