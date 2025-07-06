<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('movies', [DashboardController::class, 'movies'])->name('movie');

Route::get('genres', [DashboardController::class, 'genres'])->name('genre');

Route::get('users', [DashboardController::class, 'users'])->name('user');

Route::get('reviews', [DashboardController::class, 'reviews'])->name('review');

Route::get('reports', [DashboardController::class, 'reports'])->name('report');


