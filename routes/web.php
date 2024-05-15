<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index']);

Route::resource('/dashboard/user', UserController::class);

Route::resource('/dashboard/category', CategoryController::class);

Route::resource('/dashboard/stock', StockController::class);
