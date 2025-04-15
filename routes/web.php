<?php

use App\Http\Controllers\Admin\StockController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'dashboard']);
Route::get('/stock', [StockController::class, 'stock']);
Route::get('/stock/input', [StockController::class, 'inputStock']);
Route::get('/stock/new', [StockController::class, 'newStock']);
Route::post('/stock/addmaterial', [StockController::class, 'addmaterial']);
Route::post('/stock/newItem', [StockController::class, 'newItem']);
