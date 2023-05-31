<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//
Route::get('/get/users/all', [UserController::class, 'index']);
Route::get('/get/users', [UserController::class, 'getPaginated']);
Route::get('/get/users/{user}', [UserController::class, 'show']);

Route::get('/get/products/all', [ProductController::class, 'index']);
Route::get('/get/products', [ProductController::class, 'getPaginated']);
Route::get('/get/product/{product}', [ProductController::class, 'show']);
