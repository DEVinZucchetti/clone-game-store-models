<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
Route::put('categories/{id}', [CategoryController::class, 'update']);


