<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AssetControler;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\MarkerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductMarkerController;
use App\Http\Controllers\RequirementController;
use Illuminate\Support\Facades\Route;

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::put('products/{id}', [ProductController::class, 'update']);

Route::get('categories', [CategoryController::class, 'index']);
Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::delete('categories/{id}', [CategoryController::class, 'destroy']);
Route::put('categories/{id}', [CategoryController::class, 'update']);

Route::post('markers', [MarkerController::class, 'store']);
Route::get('markers', [MarkerController::class, 'index']);
Route::delete('markers/{id}', [MarkerController::class, 'destroy']);

Route::post('products_markers', [ProductMarkerController::class, 'store']);
Route::get('products_markers', [ProductMarkerController::class, 'index']);
Route::delete('products_markers/{id}', [ProductMarkerController::class, 'destroy']);

Route::post('evaluations', [EvaluationController::class, 'store']);
Route::get('evaluations', [EvaluationController::class, 'index']);
Route::put('evaluations/{id}', [EvaluationController::class, 'update']);
Route::delete('evaluations/{id}', [EvaluationController::class, 'destroy']);

Route::get('assets', [AssetControler::class, 'index']);
Route::post('assets', [AssetControler::class, 'store']);
Route::put('assets/{id}', [AssetControler::class, 'update']);
Route::delete('assets/{id}', [AssetControler::class, 'destroy']);

Route::get('achievements', [AchievementController::class, 'index']);
Route::post('achievements', [AchievementController::class, 'store']);
Route::put('achievements/{id}', [AchievementController::class, 'update']);
Route::delete('achievements/{id}', [AchievementController::class, 'destroy']);

Route::get('requirements', [RequirementController::class, 'index']);
Route::post('requirements', [RequirementController::class, 'store']);
Route::put('requirements/{id}', [RequirementController::class, 'update']);
Route::delete('requirements/{id}', [RequirementController::class, 'destroy']);



