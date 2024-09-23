<?php

namespace App\Http\Controllers;

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
    
}
