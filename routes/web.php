<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilnaAplikacijaController;
use App\Http\Controllers\TvAplikacijaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tv-aplikacija', [TvAplikacijaController::class, 'index'])->name('tv-aplikacija');
Route::get('/mobilna-aplikacija', [MobilnaAplikacijaController::class, 'index'])->name('mobilna-aplikacija');
