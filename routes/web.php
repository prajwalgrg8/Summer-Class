<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');

Route::get('/admin/movies', [MovieController::class, 'index'])->name('admin.movie.index');
Route::delete('/admin/movies/{movieId}', [MovieController::class, 'delete'])->name('admin.movie.delete');


Route::get('/admin/genres', [DashboardController::class, 'genres'])->name('admin.genre.index');


Route::get('admin/users', [DashboardController::class, 'users'])->name('admin.user.index');

Route::get('admin/reviews', [DashboardController::class, 'reviews'])->name('admin.review.index');


