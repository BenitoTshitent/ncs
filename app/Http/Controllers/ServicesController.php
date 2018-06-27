<?php

namespace App\Http\Controllers;

use App\services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $services=services::all()->toArray();
        return view('others.services',compact('services'));
    }

    public function store( Request $request)
    {
        $data=$this->validate($request,[
            // 'image'=>'dimensions:max_width=100,max_height=100',
            'titre'=>'required',
            'description'=>'required'
        ]);

        if($request->ico==null){

            redirect('/newservices');
        }else{
            //$path=$request->file(Input::get('image'))->store('images');
            $path = Storage::disk('local')->put('', $request->file('ico'));
            $service=new services();
            $service->saveProd($data,$path);
            return redirect('/newservices');
        }

    }

    public function destroy($id){
        $service=services::find($id);
        $service->delete();
        redirect('/services');
    }
}
