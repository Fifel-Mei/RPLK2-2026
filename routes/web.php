<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/admin/profile', [\App\Http\Controllers\DashboardController::class, 'profile'])->name('dashboard.profile');
