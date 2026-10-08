<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

Route::get('/', function () {return view('pages');})->name('pages');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');

// User
Route::get('user', [UserController::class, 'index'])->name('user');
