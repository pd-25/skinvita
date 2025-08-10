<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('index');
});

Route::get('/index', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/botox', [FrontendController::class, 'botox'])->name('botox');
Route::get('/body-sculpting', [FrontendController::class, 'bodySculpting'])->name('body-sculpting');
