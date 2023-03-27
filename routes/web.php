<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/{category_slug}/{article_slug?}', [ApplicationController::class, 'getCategoryOrArticle'])
    ->name('category.or.article')->whereIn('category_slug', ['tutorials']);
Route::get('/contact', [ApplicationController::class, 'contact'])->name('contact');
Route::post('/contact', [ApplicationController::class, 'sendContact'])->name('contact.send');
