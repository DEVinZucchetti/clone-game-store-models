<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductAssetControler;

Route::get('ProductAssets', [ProductAssetControler::class, 'index']);
Route::post('ProductAssets', [ProductAssetControler::class, 'store']);
Route::put('ProductAssets/{id}', [ProductAssetControler::class, 'update']);
Route::delete('ProductAssets/{id}', [ProductAssetControler::class, 'destroy']);
