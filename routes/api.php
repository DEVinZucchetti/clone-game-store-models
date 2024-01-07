<?php

use App\Http\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;

Route::get('achievements', [AchievementController::class, 'index']);
Route::post('achievements', [AchievementController::class, 'store']);
Route::delete('achievements/{id}', [AchievementController::class, 'destroy']);
Route::put('achievements/{id}', [AchievementController::class, 'update']);
