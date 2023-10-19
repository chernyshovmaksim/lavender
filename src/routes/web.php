<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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


Route::get('/', [PageController::class, 'Home']);

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/product', [ProductController::class, 'product'])->name('product');