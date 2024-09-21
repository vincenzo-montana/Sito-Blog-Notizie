<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::all();
        $categories = Category::all();

        return view('article.homepage', compact('article', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path_image = '';
        if ($request->hasFile('img')) {
            $name = $request->file('img')->getClientOriginalName();
            $path_image = $request->file('img')->storeAs('public/images', $name);

            // 'title', 'subtitle', 'body', 'image','user_id', 'category_id'
    }
        $article = Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'image'=>$request->image,
            'user_id'=>Auth::user()->id ,
            'category_id'=>$request->category_id,
        ]);
        return redirect()->route('homepage')->with('message', 'Articolo creato con successo');
    }
    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
    
}

