<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

Route::view('/', 'welcome')->name('home');

// Inserisci products
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

// Prodotti creati
Route::get('/product/index', [ProductController::class, 'index'])->name('product.index');

// Form per inserimento
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// Prodotti CRUD
Route::get('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit')->middleware('auth');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/delete/{product}', [ProductController::class, 'destroy'])->name('product.delete')->middleware('auth');

// Article Controller
Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

// Article CRUD
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/article/edit/{article}', [ArticleController::class, 'edit'])->name('article.edit')->middleware('auth');
Route::put('/article/update/{article}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('article.delete')->middleware('auth');

// Profilo personale
Route::get('/user/profile', [PublicController::class,'profile'])->name('user.profile');

//Crea tag
Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create')->middleware('auth');
Route::post('/tag/create/submit', [TagController::class, 'store'])->name('tag.submit')->middleware('auth');
Route::get('/tag/index', [TagController::class, 'index'])->name('tag.index')->middleware('auth');
Route::get('/tag/show/{tag}', [TagController::class, 'show'])->name('tag.show')->middleware('auth');
