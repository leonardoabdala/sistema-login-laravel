<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/login', function () {
    return view('index');
});

Route::get('/hello', function () {
    return "hello world";
});

Route::post('/login', [LoginController::class, 'autenticar']);
