<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class, 'homepage'])->name('homepage');

Route::get('/login', [PageController::class, 'login'])->name('login');

//rotta in cui è presente article.create per la raccolta dei dati
Route::resource('article', ArticleController::class);

//vista in cui sono presenti tutti gli articoli creati
Route::get('/archivio', [PageController::class,'archivio'])->name('archivio');

//rotta che ci restitusice nella vista bycatgory gli articoli più recenti associati ad ogni categoria 
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('bycategory');

//rotta che ci restituisce nella vista user gli articoli associati all'utente autenticato 
Route::get('/article/user/{user}', [ArticleController::class, 'user'])->name('user');

//Metodo grouping , gruppo di rotte che verrà protetto dal middelware creato e gestione di una rotta che porterà l'admin alla sua dashboard personale
Route::middleware('admin')->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    //rotte con metodo post per far diventare un utente admin , revisor o writer
    Route::patch('/set-admin/{user}', [AdminController::class, 'setadmin'])->name('admin.setadmin');
    Route::patch('/set-revisor/{user}', [AdminController::class, 'setrevisor'])->name('admin.setrevisor');
    Route::patch('/set-writer/{user}', [AdminController::class, 'setwriter'])->name('admin.setwriter');

    //Rotte Dashboard admin edit o delete dei tags
    Route::put('/admin/edit/tag/{tag}', [AdminController::class, 'editTag'])->name('admin.editTag');
    Route::delete('/admin/delete/tag/{tag}', [AdminController::class, 'deleteTag'])->name('admin.deleteTag');
});

// Rotta GET per il Lavora con noi
Route::get('/careers', [PublicController::class, 'careers'])->name('careers');

//ROTTA POST per il lavora con noi
Route::post('/careers/submit',[PublicController::class, 'careerSsubmit'])->name('careers.submit');

//ROTTE REVISOR
Route::middleware('revisor')->group(function(){
    Route::get('/revisor/dashboard', [RevisorController::class, 'dashboard'])->name('revisor.dashboard');
    Route::post('/revisor/{article}/accept', [RevisorController::class, 'acceptArticle'])->name('revisor.acceptArticle');
    Route::post('/revisor/{article}/reject', [RevisorController::class, 'rejectArticle'])->name('revisor.rejectArticle');
    Route::post('/revisor/{article}/undo', [RevisorController::class, 'undoArticle'])->name('revisor.undoArticle');
});

//
Route::middleware('writer')->group(function(){
    Route::get('/article/create', [ArticleController::class,'create'])->name('article.create');
    Route::post('/article/store', [ArticleController::class,'store'])->name('article.store');
});

// Rotta che gestirà i dati inseriti nella barra di ricerca

Route::get('/search/article', [ArticleController::class, 'articleSearch'])->name('article.search');