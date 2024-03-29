<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontend\PageController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home']);

Route::get('/category/{category}', [PageController::class, 'category_page'])->name('category');
Route::get('/singlePost/{post}', [PageController::class, 'single_post'])->name('single_post');
Route::get('/tag/{tag}', [PageController::class, 'tag_post'])->name('tag');
Route::get('/back', [PageController::class, 'back'])->name('back');


Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register',[AuthController::class, 'register_store'])->name('register_store');


