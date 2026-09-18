<?php
use App\Http\Controllers\TrainController;
use App\Http\Controllers\ProductController;

Route::get('/trains', [TrainController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);