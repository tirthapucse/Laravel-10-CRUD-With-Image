<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;


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

Route::get('/', [ProductController::class,'index'])->name('products.index');

Route::get('products/create', [ProductController::class,'create'])->name('products.create');
Route::post('products/store', [ProductController::class,'store'])->name('products.store');

Route::get('products/{id}/edit', [ProductController::class,'edit'])->name('products.edit');
Route::put('products/{id}/update', [ProductController::class,'update'])->name('products.update');
Route::get('products/{id}/delete', [ProductController::class,'destroy'])->name('products.destroy');
Route::get('products/{id}/show', [ProductController::class,'show'])->name('products.show');

Route::get('products/stock', [StockController::class,'stock']);

