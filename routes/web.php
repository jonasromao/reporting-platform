<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Schools
Route::get('/index-school', [SchoolController::class, 'index'])->name('schools.index');
Route::get('/create-school', [SchoolController::class, 'create'])->name('schools.create');
Route::post('/store-school', [SchoolController::class, 'store'])->name('schools.store');