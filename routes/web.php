<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'homepage'])->name('homepage');

Route::get('/login', [PageController::class, 'login'])->name('login');

//rotta in cui è presente article.create per la raccolta dei dati
Route::resource('article', ArticleController::class);

//vista in cui sono presenti tutti gli articoli creati
Route::get('/archivio', [PageController::class,'archivio'])->name('archivio');

//rotta che ci restitusice nella vista bycatgory gli articoli più recenti associati ad ogni categoria 
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('bycategory');

//rotta che ci restituisce nella vista i tuoi articoli gli articoli associati all'utente autenticato 
Route::get('/article/user/{user}', [ArticleController::class, 'user'])->name('user');

// Rotta GET per il Lavora con noi
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');


//ROTTA POST per il lavora con noi

Route::post('/careers/submit',[PublicController::class, 'careerSsubmit'])->name('careers.submit');