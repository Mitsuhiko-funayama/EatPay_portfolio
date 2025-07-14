<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cartcontroller;
use App\Http\Controllers\topController;
use App\Http\Controllers\StoreController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/top', function () {
    return view('top');
})->name('top');

Route::get('/top', [TopController::class, 'index'])->name('top');

Route::get('/cart', function () {
    return view('cart');
})->name('cart.index');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

Route::get('/store/{id}', [StoreController::class, 'show'])->name('store.show');