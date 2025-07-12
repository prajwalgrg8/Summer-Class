<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GenreController;

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

#Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');

Route::prefix('admin/movie')->as('admin.movie.')->controller(MovieController::class)->group(function () {
    Route::get('/', 'index')->name('index'); 
    Route::get('/create', 'create')->name('create'); 
    Route::post('/', 'store')->name('store'); 
    Route::get('/{movieId}', 'edit')->name('edit'); 
    Route::put('/{movieId}', 'update')->name('update'); 
    Route::delete('/{movieId}', 'delete')->name('delete');
});

Route::get('/admin/genres', [GenreController::class, 'index'])->name('admin.genre.index');
Route::get('/admin/genres/create', [GenreController::class, 'create'])->name('admin.genre.create');
Route::post('/admin/genres/store', [GenreController::class, 'store'])->name('admin.genre.store');


Route::delete('/admin/genres/{genreId}', [GenreController::class, 'delete'])->name('admin.genre.delete');


Route::get('admin/users', [UserController::class, 'index'])->name('admin.user.index');
Route::get('admin/create', [UserController::class, 'create'])->name('admin.user.create');

Route::get('admin/reviews', [DashboardController::class, 'reviews'])->name('admin.review.index');


