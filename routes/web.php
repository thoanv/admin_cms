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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/diem-den/{slug}', [HomeController::class, 'destination'])->name('destination');
Route::get('/{category_slug?}/{slug?}', [HomeController::class, 'slug'])->name('slug');
Route::get('/detail', [PostController::class, 'detail'])->name('post.detail');
Route::get('/list', [PostController::class, 'index'])->name('post.list');
