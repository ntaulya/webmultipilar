<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;

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
// kalau mau ke halaman login langsung tambahin /login di url begitupun kalo register 
//"http://127.0.0.1:8000/login" http://127.0.0.1:8000/register

Auth::routes();

Route::get('/', [App\Http\Controllers\LandingController::class, 'index']);
Route::get('/about-us', [App\Http\Controllers\AboutController::class, 'index'])->name('index');
Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('index');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('index');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
