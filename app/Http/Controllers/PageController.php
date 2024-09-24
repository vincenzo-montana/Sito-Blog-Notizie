<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('homepage', compact('articles'));
    }
    public function register(){
        return view('auth.register');
    }
    public function login() {
        return view('auth.login');
    }
    public function create(){
        return view('article.create');
    }
    


    public function archivio(){

        return redirect(route('article.index'));
    }

}
