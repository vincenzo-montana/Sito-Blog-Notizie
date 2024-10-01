<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;


class PublicController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [new Middleware('auth', except: ['homepage', 'show', 'byCategory', 'byUser', 'artricleSearch'])];
        
    }

    public function careers(){
       return view('careers');
   }

   public function careersSubmit(Request $request)
{
    $request->validate([
        'role'    => 'required',
        'email'   => 'required|email',
        'message' => 'required',
    ]);


    $user    = Auth::user();
    $role    = $request->role;
    $email   = $request->email;
    $message = $request->message;
    $info    = compact('role', 'email', 'message');

    Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));

    

    switch ($role) {
        case 'admin':
            $user->is_admin = NULL;
            break;
        case 'revisor':
            $user->is_revisor = NULL;
            break;
        case 'writer':
            $user->is_writer = NULL;
            break;
    }

    $user->update();

    session()->flash('success', 'Candidatura inviata con successo!');
    return redirect(route('homepage'))->with('message', 'Mail inviata con successo!');
}


}
