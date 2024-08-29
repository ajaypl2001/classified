<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

// Admin panels
Route::group(['middleware' => ['admins']], function () {
    Route::get('/admin-dashboard',[AdminController::class, 'dashboard'])->name('admin-dashboard');
});

Route::group(['middleware' => ['user']], function () {
    Route::get('/home', [UserController::class, 'home'])->name('home');
});

Route::get('/login_form', [AuthController::class, 'loginform'])->name('login_form');
Route::get('/registerform', [AuthController::class, 'registerform'])->name('registerform');
Route::get('/admin', [AuthController::class, 'admin']);
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/home', [UserController::class, 'home'])->name('home');
Route::get('/bolgs', [UserController::class, 'blogs'])->name('blogs');

Route::get('/test', [AdminController::class, 'test']);

