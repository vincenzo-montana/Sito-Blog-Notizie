<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('article.homepage');
})->name('homepage');

Route::get('/login', [PageController::class, 'login'])->name('login');

Route::resource('article', ArticleController::class);