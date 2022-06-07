<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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
Route::get('/list', [PostController::class, 'index'])->name('post.list');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/diem-den/{destination_slug?}/{slug?}', [HomeController::class, 'destination'])->name('destination');
Route::get('/{category_slug?}/{slug?}', [HomeController::class, 'slug'])->name('slug');
Route::get('/detail', [PostController::class, 'detail'])->name('post.detail');
Route::post('/send-comment/comment/send', [PostController::class, 'ajaxComment'])->name('ajax-comment');
Route::post('plus-like', [PostController::class, 'plusLike'])->name('plus-like');
