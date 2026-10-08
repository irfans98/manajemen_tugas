<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TugasController;

Route::get('/', function () {return view('pages');})->name('pages');

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

//logout
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('checkLogin')->group(function(){ // php artisan make:middleware
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // User
    Route::get('user', [UserController::class, 'index'])->name('user');

    // Tugas
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
});


