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

        if($request->icon==null){
            return redirect('/services');
        }else{
            //$path=$request->file(Input::get('image'))->store('images');
            $path = $request->file('icon')->store('images');
            $service=new services();
            $service->saveService($data,$path);
            return redirect('/services');
        }

    }

    public function destroy($id){
        $service=services::find($id);
        $service->delete();
        return redirect('/services');
    }
}
