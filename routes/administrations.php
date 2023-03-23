<?php

use App\Http\Controllers\Administrations\AdministrationController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AdministrationController::class, 'login'])->name('admin-login');
