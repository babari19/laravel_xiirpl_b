<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


Route::get('/', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'save'])->name('save');
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

