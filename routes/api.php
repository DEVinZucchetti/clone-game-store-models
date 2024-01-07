<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AvaliationController;

Route::post('Avaliations', [AvaliationController::class, 'store']);
Route::get('Avaliations', [AvaliationController::class, 'index']);
Route::put('Avaliations/{id}', [AvaliationController::class, 'update']);
Route::delete('Avaliations/{id}', [AvaliationController::class, 'destroy']);

