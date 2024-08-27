<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProgressController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [ProgressController::class, 'dashboard'])->name('dashboard');
    Route::post('/progress/update', [ProgressController::class, 'update'])->name('progress.update');
    Route::post('/lessons/{lesson}/progress', [ProgressController::class, 'update'])->name('progress.update');
    Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.show');
    Route::post('/courses/{course}/enroll', [CourseController::class, 'enroll'])->name('course.enroll');
    Route::get('/course/{course}/checkout/success', [CourseController::class, 'handleCheckoutSuccess'])->name('course.checkout.success');
    Route::get('/course/{course}/checkout/cancel', [CourseController::class, 'handleCheckoutCancel'])->name('course.checkout.cancel');
});




