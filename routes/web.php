<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landing;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\TutorialController;

//? get the pages
Route::get('/', [Landing::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/features', [FeaturesController::class, 'index'])->name('features');
Route::get('/tutorial', [TutorialController::class, 'index'])->name('tutorial');