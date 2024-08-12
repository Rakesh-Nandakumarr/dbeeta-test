<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgressController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [ProgressController::class, 'dashboard'])->name('dashboard');
    Route::post('/progress/update', [ProgressController::class, 'update'])->name('progress.update');
});
Route::post('/lessons/{lesson}/progress', [ProgressController::class, 'update'])->name('progress.update');

Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course_show');

Route::post('/courses/{course}/enroll', [CourseController::class, 'enroll'])->name('course_enroll');




