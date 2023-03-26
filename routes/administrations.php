<?php

use App\Http\Controllers\Administrations\AdministrationController;
use App\Http\Controllers\Administrations\ArticleController;
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
            Route::get('/edit/{category}', [CategoryController::class, 'edit'])->name('admin.category.edit')->whereNumber('category');
            Route::put('/edit/{category}', [CategoryController::class, 'editProcess'])->name('admin.category.edit.post')->whereNumber('category');
            Route::delete('/delete/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete')->whereNumber('category');
        });
        Route::prefix('articles')->group(function () {
            Route::get('/', [AdministrationController::class, 'articles'])->name('admin.article');
            Route::get('/create', [ArticleController::class, 'create'])->name('admin.article.create');
            Route::post('/create', [ArticleController::class, 'store'])->name('admin.article.store');
        });
    });
