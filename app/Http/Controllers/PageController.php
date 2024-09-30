<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //funzione che ci ritorna nella home gli ultimi 4 articoli creati
    public function homepage(){
        
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('homepage', compact('articles'));
         
    }
    public function register(){
        return view('auth.register');
    }
    public function login() {
        return view('auth.login');
    }
    
    public function archivio(){

        return view('archivio');
    }

}
