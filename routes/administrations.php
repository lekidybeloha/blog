<?php

use App\Http\Controllers\Administrations\AdministrationController;
use App\Http\Controllers\Auth\Administrations\AuthController;
use Illuminate\Support\Facades\Route;

//Auth route for administrations
Route::get('/login', [AuthController::class, 'login'])->name('admin-login');
Route::post('/login', [AuthController::class, 'attempt'])->name('admin-attempt');

//Dashboard administrations
Route::get('/dashboard', [AdministrationController::class, 'index'])->middleware(['auth:administrators'])->name('admin-dashboard');
