<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\LihatController;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login', [ApiController::class, 'login']);
Route::apiResource('products', LihatController::class); // Endpoint CRUD Produk
Route::put('products/{id}', [LihatController::class, 'update']);