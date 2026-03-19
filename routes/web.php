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

Route::prefix('schools')->group(function () {
    Route::get('/', [SchoolController::class, 'index'])->name('schools.index');
    Route::get('/create', [SchoolController::class, 'create'])->name('schools.create');
    Route::get('/{school}', [SchoolController::class, 'show'])->name('schools.show');    
    Route::post('/', [SchoolController::class, 'store'])->name('schools.store');
    Route::get('/{school}/edit', [SchoolController::class, 'edit'])->name('schools.edit');
    Route::put('/{school}/edit', [SchoolController::class, 'update'])->name('schools.update');
});
