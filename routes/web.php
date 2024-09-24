<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'homepage'])->name('homepage');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::resource('article', ArticleController::class);
Route::get('/archivio', [PageController::class,'archivio'])->name('archivio');
Route::get('/create', [PageController::class, 'create'])->name('create');

Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('bycategory');