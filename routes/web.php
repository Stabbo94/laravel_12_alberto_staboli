<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

// Inserisci products
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// Prodotti creati
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

// Form per inserimento
Route::get('/product/form', [ProductController::class, 'form'])->name('product.form');

// Article Controller
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete');
