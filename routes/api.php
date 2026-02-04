<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;


Route::prefix('products')->group(function () {
    Route::post('/', [ProductController::class, 'store']);
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/{id}', [ProductController::class, 'show']);
});

//Rutas para categorías
Route::get('/categories', [CategoryController::class, 'index']);

//Rutas para usuarios
Route::get('/users', [App\Http\Controllers\UsersController::class, 'index']);
Route::post('/users', [App\Http\Controllers\UsersController::class, 'store']);


//Rutas para autenticación de clients
Route::post('/clients/login', [App\Http\Controllers\ClientController::class, 'login']);
Route::post('/clients/register', [App\Http\Controllers\ClientController::class, 'register']);