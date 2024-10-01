<?php

namespace App\Http\Middleware;

use Closure;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UserIswriter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

     //commentato da salvo quello sotto
    // public function handle(Request $request, Closure $next): Response
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next): Response 
    {
        if(Auth::user() && Auth::user()->is_writer){
            return $next ($request);

        }

        return redirect(route('homepage'))->with('alter', 'Non sei Autenticato Cucciola ');

    }


    
}

