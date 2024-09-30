<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) { //erano ugali e io le ho unite
        $middleware->alias([
            'admin' => App\Http\Middleware\UserIsAdmin::class,
            'writer'=> app\Http\Middleware\UserIsWriter::class, //ho aggiunto questo 
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

   //questo e quello uguale.

    // ->withMiddleware(function (Middleware $middleware){
    //     $middleware->alis([
    //         'writer'=> app\Http\Middleware\UserIsWriter::class,
    //     ]);
    // })