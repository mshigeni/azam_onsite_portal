<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('layouts.login');
});

Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');
Route::get('/dashboard', function () {return view('layouts.dashboard');})->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/', [LoginController::class, 'login'])->name('/');
