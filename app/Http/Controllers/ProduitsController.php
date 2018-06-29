<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Validator;

class ProduitsController extends Controller
{
    public function index()
    {
        $produits=Produits::all()->toArray();
        return view('others.produits',compact('produits'));
    }

    public function store( Request $request)
    {

        $data=$this->validate($request,[
          // 'image'=>'dimensions:max_width=100,max_height=100',
           'titre'=>'required',
           'lien'=>'required',
           'description'=>'required'
        ]);


        if($request->image==null){
           // dd($request);
            redirect('/produits');
        }else{
             //$path=$request->file(Input::get('image'))->store('images');
            //dd($request->image);
             $path = $request->file('image')->store('images');
             $pro=new Produits();
             $pro->saveProd($data,$path);
             return redirect('/produits');
        }
    }

    public function destroy($id){
        $pdt=Produits::find($id);
        $pdt->delete();
        redirect('/produits');
    }
}
