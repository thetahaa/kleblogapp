<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Filament\Facades\Filament;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'login']);
Route::post('/products', [ProductController::class, 'products']);


Route::middleware(['auth:sanctum'])->group(function (){
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/profile', [LoginController::class, 'profile']);
    Route::apiResource('products', ProductController::class);
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::middleware('auth:sanctum')->post('logout', [AuthController::class, 'logout']);


Filament::auth();