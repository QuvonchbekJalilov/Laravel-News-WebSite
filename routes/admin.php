<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\PageController;
use App\Http\Controllers\backend\PermissionController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\RoleController;
use App\Http\Controllers\backend\UserController;
use App\Http\Controllers\backend\TagController;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);
Route::resource('/categories', CategoryController::class);
Route::resource('/posts', PostController::class);
Route::resource('/roles', RoleController::class);
Route::resource('/permissions', PermissionController::class);
Route::resource('/tags', TagController::class);
Route::get('/adminDashboard', [PageController::class, 'adminDashboard']);
