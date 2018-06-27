<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input;
use App\Messages;

class MessagesController extends Controller
{

    public function index(){
        $msg=Messages::all()->toArray();

        return view('others.messages',compact('msg'));
    }

    public function store(Request $request){
        $msg= new Messages();
        $data=$this->validate($request,[
            'nomEntite'=>'required',
            'emailEntite'=>'required',
            'PhoneEntite'=>'required',
            'sujetEntite'=>'required',
            'contenu'=>'required'
        ]);
        $msg->saveMsg($data);
        return view('others.succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mss = Messages::find($id);
        $mss->delete();
        return redirect('/messages');
    }
}
