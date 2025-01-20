<?php

use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');
