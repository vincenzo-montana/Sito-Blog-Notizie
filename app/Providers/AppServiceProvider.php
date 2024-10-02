<?php

namespace App\Providers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
      */
      //funzioni che rendono disponibili le tabelle in ogni vista
    public function boot(): void
    {
        if(Schema::hasTable('categories')) {
            view()->share('categories', Category::all());
        };
        if(Schema::hasTable('users')) {
            view()->share('users', User::all());
        };
        if(Schema::hasTable('articles')) {
            view()->share('articles', Article::all());
        };

        if(Schema::hasTable('tags')){
            $tags = Tag::all();
            View::share(['tags' => $tags]);
        }
    }
}
