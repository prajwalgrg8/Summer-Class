<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Middleware\AppMiddleware;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;

Route::prefix('admin/register')
    ->as('admin.register.')
    ->controller(RegisterController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });


Route::prefix('admin/login')
    ->as('admin.login.')
    ->controller(LoginController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'check')->name('check');
    });

Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');

    
Route::prefix('admin/movie')->as('admin.movie.')->controller(MovieController::class)->group(function () {
    Route::get('/', 'index')->name('index'); 
    Route::get('/create', 'create')->name('create'); 
    Route::post('/', 'store')->name('store'); 
    Route::get('/{movieId}', 'edit')->name('edit'); 
    Route::put('/{movieId}', 'update')->name('update'); 
    Route::delete('/{movieId}', 'delete')->name('delete');
});
#Route::get('admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');


Route::prefix('admin/genre')->as('admin.genre.')->controller(GenreController::class)->group(function () {
    Route::get('/', 'index')->name('index'); 
    Route::get('/create', 'create')->name('create'); 
    Route::post('/', 'store')->name('store'); 
    Route::get('/{genreId}', 'edit')->name('edit'); 
    Route::put('/{genreId}', 'update')->name('update'); 
    Route::delete('/{genreId}', 'delete')->name('delete');
});




Route::delete('/admin/genres/{genreId}', [GenreController::class, 'delete'])->name('admin.genre.delete');

Route::prefix('admin/user')->as('admin.user.')->middleware(AppMiddleware::class)->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index'); 
    Route::get('/create', 'create')->name('create'); 
    Route::post('/', 'store')->name('store'); 
    Route::get('/{userId}', 'edit')->name('edit'); 
    Route::put('/{userId}', 'update')->name('update'); 
    Route::delete('/{userId}', 'delete')->name('delete');
});


