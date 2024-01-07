<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMarkerController;

Route::post('markers', [MarkerController::class, 'store']);
Route::get('markers', [MarkerController::class, 'index']);
Route::delete('markers/{id}', [MarkerController::class, 'destroy']);

Route::post('products_markers', [ProductMarkerController::class, 'store']);
Route::get('products_markers', [ProductMarkerController::class, 'index']);
Route::delete('products_markers/{id}', [ProductMarkerController::class, 'destroy']);
