<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acceuil;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acceuils= Acceuil::first();
        return view('home', compact('acceuils'));
    }

    public function store(Request $request)
    {
        if($request->id != null){
            $acceuil=Acceuil::find($request->id);

            if($request->checker == 'acceuil'){
                if($request->logo != null){
                    $path=$request->file('logo')->store('icons');
                    $acceuil->logo=$path;
                }
                if($request->ImageAcc != null){
                    $path=$request->file('ImageAcc')->store('images');
                    $acceuil->ImageAccUrl=$path;
                }
                $acceuil->primeTextAcc=$request->primeTextAcc;
                $acceuil->secTextAcc=$request->secTextAcc;
                $acceuil->save();

            }elseif ($request->checker == 'apropos'){
                if($request->imagefdApp != null){
                    $path=$request->file('imagefdApp')->store('images');
                    $acceuil->imagefdAppUrl=$path;
                }
                $acceuil->enteteTextApp=$request->enteteTextApp;
                $acceuil->descTextApp=$request->descTextApp;
                $acceuil->save();

            }elseif ($request->checker == 'contacts'){
                $acceuil->emailTextContact=$request->emailTextContact;
                $acceuil->num1TextContact=$request->num1TextContact;
                $acceuil->num2TextContact=$request->num2TextContact;
                $acceuil->save();

            }elseif ($request->checker =='adresse'){
                $acceuil->numAvenenue=$request->numAvenenue;
                $acceuil->villeCommune=$request->villeCommune;
                $acceuil->paysProv=$request->paysProv;
                $acceuil->save();

            }elseif ($request->checker == 'reseauxsociaux'){
                $acceuil->facebook=$request->facebook;
                $acceuil->twitter=$request->twitter;
                $acceuil->instagram=$request->instagram;
                $acceuil->save();
            }
        }


        return redirect('/home');

    }
}
