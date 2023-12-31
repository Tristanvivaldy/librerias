<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardBooksController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/session', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/session', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{book:slug}', [BookController::class, 'show']);
Route::get('/category', [CategoryController::class, 'index']);
Route::get('/dashboards', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboardsBooks', DashboardBooksController::class)->middleware('auth');
