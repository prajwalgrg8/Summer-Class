<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

Route::get('home', [HomeController::class, 'index']);

Route::get('', [AboutController::class, 'index']);

