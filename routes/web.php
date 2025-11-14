<?php


use Illuminate\Support\Facades\Route;

// Route Admin
Route::get('/admin/{any?}', function () {
    return view('admin'); // vista blade donde montas la app Vue del admin
})->where('any', '.*');

// Route Public
Route::get('/{any}', function () {
    return view('welcome'); // tu frontend público
})->where('any', '.*');
