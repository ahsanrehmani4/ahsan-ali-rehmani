<?php

use App\Http\Controllers\Visitor\AboutController;
use App\Http\Controllers\Visitor\BlogController;
use App\Http\Controllers\Visitor\ContactController;
use App\Http\Controllers\Visitor\HomeController;
use App\Http\Controllers\Visitor\PortfolioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/single', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
