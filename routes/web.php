<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVController;
use App\Http\Controllers\ContactController;





Route::get('/', [ContactController::class, 'index'])->name('index');
Route::get('/accueil', [ContactController::class, 'index'])->name('index');
Route::get('/telecharger-cv', [CVController::class, 'telechargerCV'])->name('cv.telecharger');
Route::post('/accueil',[ContactController::class,'submitContactForm'])->name('contact.submit');




