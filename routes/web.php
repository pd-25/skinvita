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
Route::get('/dermapen-and-dermaroller', [FrontendController::class, 'dermapenAndDermaroller'])->name('dermapen-and-dermaroller');
Route::get('/fillers', [FrontendController::class, 'fillers'])->name('fillers');
Route::get('/stem-cell-treatment', [FrontendController::class, 'stemCellTreatment'])->name('stem-cell-treatment');
Route::get('/hair-transplant', [FrontendController::class, 'hairTransplant'])->name('hair-transplant');
Route::get('/mesotherapy', [FrontendController::class, 'mesotherapy'])->name('mesotherapy');
Route::get('/double-chin-reduction', [FrontendController::class, 'doubleChinReduction'])->name('double-chin-reduction');
Route::get('/skin-rejuvenation', [FrontendController::class, 'skinRejuvenation'])->name('skin-rejuvenation');
Route::get('/lasers', [FrontendController::class, 'lasers'])->name('lasers');
Route::get('/medifacial', [FrontendController::class, 'medifacial'])->name('medifacial');
Route::get('/prp', [FrontendController::class, 'prp'])->name('prp');
Route::get('/our-doctors', [FrontendController::class, 'ourDoctors'])->name('our-doctors');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
