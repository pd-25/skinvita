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
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});
