<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;


// Página inicial do site
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Tela de login
Route::get('/login', [LoginController::class, 'index'])->name('login');

// Processar dados do login
Route::post('/login', [LoginController::class, 'loginProcess'])->name('login.process');

// Página inicial do administrativo
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// Schools

Route::prefix('schools')->group(function () {
    Route::get('/', [SchoolController::class, 'index'])->name('schools.index');
    Route::get('/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::get('/{school}', [SchoolController::class, 'show'])->name('schools.show');    
    Route::post('/', [SchoolController::class, 'store'])->name('schools.store');
    Route::get('/{school}/edit', [SchoolController::class, 'edit'])->name('schools.edit');
    Route::put('/{school}/edit', [SchoolController::class, 'update'])->name('schools.update');
    Route::delete('/{school}', [SchoolController::class, 'destroy'])->name('schools.destroy');
});
