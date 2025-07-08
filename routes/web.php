<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GenreController;

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

#Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');

Route::get('/admin/movies', [MovieController::class, 'index'])->name('admin.movie.index');
Route::get('/admin/create', [MovieController::class, 'create'])->name('admin.movie.create');
Route::delete('/admin/movies/{movieId}', [MovieController::class, 'delete'])->name('admin.movie.delete');


Route::get('/admin/genres', [GenreController::class, 'index'])->name('admin.genre.index');


Route::get('admin/users', [UserController::class, 'index'])->name('admin.user.index');

Route::get('admin/reviews', [DashboardController::class, 'reviews'])->name('admin.review.index');


