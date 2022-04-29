<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonCompteController extends Controller
{
    // point d'entree de ma class c'est le constructeur
    
    public function __construct() {
        
        // securise toutes les pages du controller
        //$this->middleware('auth');

        //$this->middleware('auth')->except('panier');
    }


    public function index() {

        return view('moncompte');

    }



    public function panier() {

        return view('panier');

    }

}
