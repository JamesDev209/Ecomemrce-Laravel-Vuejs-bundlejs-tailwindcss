<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;

// Route Admin
Route::get('/admin/{any?}', function () {
    return view('admin'); // vista blade donde montas la app Vue del admin
})->where('any', '.*');

// Route Admin Auth
Route::post('/admin/login', [AdminAuthController::class, 'login']);



// Route Public
Route::get('/{any}', function () {
    return view('welcome'); // tu frontend público
})->where('any', '.*');
