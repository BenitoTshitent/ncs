<?php

namespace App\Http\Controllers;

use App\Acceuil;
use Illuminate\Http\Request;

class AcceuilController extends Controller
{

    /**
     * AcceuilController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){

    }

    public function update(Request $request){

    }
}
