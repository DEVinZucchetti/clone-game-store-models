<?php

use App\Http\Controllers\ProductRequirementController;
use Illuminate\Support\Facades\Route;

Route::get('products_requirements', [ProductRequirementController::class, 'index']);
Route::post('products_requirements', [ProductRequirementController::class, 'store']);
Route::delete('products_requirements/{id}', [ProductRequirementController::class, 'destroy']);
Route::put('products_requirements/{id}', [ProductRequirementController::class, 'update']);

