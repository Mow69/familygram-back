<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        //redirige vers la page d'accueil loggé si authentifié
        if (auth()->check()) {
            return redirect("/posts");
        }
        //sinon on affiche la page d'accueil non loggé
        return view("welcome");
    }
}
