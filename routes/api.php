<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiAuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register',[ApiAuthController::class, 'register'])->name('register');
Route::post('login', [ApiAuthController::class, 'login'])->name('login');
Route::get('data', [ApiAuthController::class, 'getdata'])->name('getdata');