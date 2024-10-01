<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tag;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        $categories = Category::all();
        
        return view('homepage', compact('articles', 'categories'));
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
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->store('images/'.$name .'.jpg', 'public');

            // 'title', 'subtitle', 'body', 'image','user_id', 'category_id'
    }
        $article = Article::create([
            'title'=>$request->title,
            'subtitle'=>$request->subtitle,
            'body'=>$request->body,
            'image'=>$path_image,
            'user_id'=>Auth::user()->id ,
            'category_id'=>$request->category_id,
            
            
        ]);


        
        $request->validate([
            'title'=> 'require|unique:articles|min:5',
            'subtitle' => 'required|min:5',
            'body'=>'required|min:10',
            'image'=>'required|image',
            'category'=>'required',
            'tags'=>'required'
        ]);


        $tags = explode(',',$request->tags);

        foreach($tags as $i=>$tag){
            $tags[$i]= trim($tag);
        }

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' =>strtolower($tag)
            ]);

            $article->tags()->attach($newTag);
        }

        return redirect()->route('homepage')->with('message', 'Articolo creato con successo');
    }



    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show' ,compact('article'));
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
    
    public function byCategory(Category $category){
        $articles=$category->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.bycategory', compact('category', 'articles'));
    }
    public function user(User $user){
        $articles=$user->articles()->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.user', compact('user', 'articles'));
    }

    public function articleSearch(Request $request){
        $query = $request->$request->input('query');
        $articles = Article::class($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.search-index', compact('articles', 'query'));
      }
    
}

