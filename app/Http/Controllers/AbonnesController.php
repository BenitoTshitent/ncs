<?php

namespace App\Http\Controllers;

use App\Abonnes;
use Illuminate\Http\Request;

class AbonnesController extends Controller
{
    public function index(){
        $abonnes=Abonnes::all()->toArray();
        return view('others.abonnes',compact('abonnes'));
    }

    public function store( Request $request){
        $abonne= new Abonnes();
        $data=$this->validate($request,[
            'email'=>'required'
        ]);
        $abonne->saveAbonne($data);
        return view('others.succes');
    }

    public  function  destroy($id){
        $abonne=Abonnes::find($id);
        $abonne->delete();
        return redirect('/abonnes');
    }
}
