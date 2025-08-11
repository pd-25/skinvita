<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/register', [AdminController::class, 'registerView'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register'])->name('admin.register.post');
Route::get('/admin/login', [AdminController::class, 'loginView'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.post');

Route::middleware('auth:admins')->group(function () {
    Route::get('/admin/admin-dashboard', [AdminController::class, 'dashboradView'])->name('admin.dashboard');

    // doctors
    Route::get('/admin/admin-doctors', [AdminController::class, 'doctrsView'])->name('admin.doctors');
    Route::post('/admin/admin-doctors', [AdminController::class, 'addDoctor'])->name('admin.doctors.post');
    Route::post('/admin/admin-doctors/edit/{id}', [AdminController::class, 'editDoctor'])->name('admin.doctors.update.post');
    Route::post('/admin/admin-doctors/delete/{id}', [AdminController::class, 'deleteDoctor'])->name('admin.doctors.delete.post');

    // testimonials
    Route::get('/admin/admin-testimonials', [AdminController::class, 'testimonialsView'])->name('admin.testimonials');
    Route::post('/admin/admin-testimonials', [AdminController::class, 'addTestimonial'])->name('admin.testimonials.post');
    Route::post('/admin/admin-testimonials/edit/{id}', [AdminController::class, 'editTestimonial'])->name('admin.testimonials.update.post');
    Route::post('/admin/admin-testimonials/delete/{id}', [AdminController::class, 'deleteTestimonial'])->name('admin.testimonials.delete.post');




    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
