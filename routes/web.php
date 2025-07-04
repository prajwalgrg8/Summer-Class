<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('about-us', [HomeController::class, 'about'])->name('aboutUs');

Route::get('service', [HomeController::class, 'services'])->name('service');

Route::get('contact', [HomeController::class, 'contacts'])->name('contacts');




