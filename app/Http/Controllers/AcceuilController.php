<?php

namespace App\Http\Controllers;

use App\Acceuil;
use App\Produits;
use App\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AcceuilController extends Controller
{

    /**
     * AcceuilController constructor.
     */
    public function __construct()
    {
     }
    
    public function index(){
        $services=services::all()->toArray();
        $produits=Produits::all()->toArray();
        $welcomes=Acceuil::first();
        return view('welcome', compact('welcomes','services','produits'));
    }

    public function store(Request $request){

        return redirect('/test');
    }
}
