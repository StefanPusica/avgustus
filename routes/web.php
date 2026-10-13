<?php

use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilnaAplikacijaController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\RequestDemoController;
use App\Http\Controllers\TvAplikacijaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tv-aplikacija', [TvAplikacijaController::class, 'index'])->name('tv-aplikacija');
Route::get('/mobilna-aplikacija', [MobilnaAplikacijaController::class, 'index'])->name('mobilna-aplikacija');
Route::get('/admin-panel', [AdminPanelController::class, 'index'])->name('admin-panel');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');
Route::post('/kontakt', [ContactController::class, 'store'])->name('contact.store');
Route::get('/zatrazi-demo', [RequestDemoController::class, 'index'])->name('request-demo');
Route::post('/zatrazi-demo', [RequestDemoController::class, 'store'])->name('request-demo.store');
Route::get('/cenovnik', [PricingController::class, 'index'])->name('pricing');
