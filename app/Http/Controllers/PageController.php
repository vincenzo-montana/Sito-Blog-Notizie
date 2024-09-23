<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return redirect(route('article.index'));
    }
    public function register(){
        return view('auth.register');
    }
    public function login() {
        return view('auth.login');
    }
    


    public function home(){

        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('home', compact('articles'));
    }
}
