<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::multilingual('/', [HomeController::class, 'index'])->name('home');
Route::multilingual('category', [CategoryController::class, 'show'])->name('category.show');
Route::multilingual('post', [PostController::class, 'show'])->name('post.show');

Route::post('comment', [PostController::class, 'comment'])->name('comment');
