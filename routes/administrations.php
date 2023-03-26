<?php

use App\Http\Controllers\Administrations\AdministrationController;
use App\Http\Controllers\Administrations\CategoryController;
use App\Http\Controllers\Auth\Administrations\AuthController;
use Illuminate\Support\Facades\Route;

//Auth route for administrations
Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('/login', [AuthController::class, 'attempt'])->name('admin.attempt');

//Dashboard administrations
Route::prefix('dashboard')
    ->middleware('auth:administrators')
    ->group(function () {
        Route::get('/', [AdministrationController::class, 'index'])->name('admin.dashboard');
        //Category routes
        Route::prefix('category')->group(function () {
            Route::get('/', [AdministrationController::class, 'categories'])->name('admin.category');
            Route::post('/', [CategoryController::class, 'create'])->name('admin.category.create');
        });
        Route::get('/articles', [AdministrationController::class, 'articles'])->name('admin.article');
    });
