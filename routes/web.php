<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'create'])->name('home');

// inserisci products
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// prodotti creati
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');
