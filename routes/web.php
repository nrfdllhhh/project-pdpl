<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    // Schedule Routes
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
    Route::get('/schedule/{id}', [ScheduleController::class, 'show'])->name('jadwal.show');
    Route::get('/schedule/edit/{task}', [ScheduleController::class, 'edit']);
    Route::put('/schedule/update/{task}', [ScheduleController::class, 'update']);
    Route::delete('/schedule/destroy/{id}', [ScheduleController::class, 'destroy']);

    // Task Routes
    Route::get('/scheduleTask', [TaskController::class, 'index'])->name('scheduleTask');
    Route::get('/create', [TaskController::class, 'create'])->name('admin.create');
    Route::post('/scheduleTask', [TaskController::class, 'store'])->name('scheduleTask.store');
    Route::get('/scheduleTask/edit/{task}', [TaskController::class, 'edit']);
    Route::put('/scheduleTask/update/{task}', [TaskController::class, 'update']);
    Route::get('/scheduleTask/{id}', [TaskController::class, 'show'])->name('admin.show');
    Route::delete('/scheduleTask/destroy/{id}', [TaskController::class, 'destroy']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
