<?php

namespace App\Http\Controllers;

use App\Models\Lib;
use Illuminate\Http\Request;

class LibController extends Controller
{
    function welcome(){
        return view('welcome');
    }

    function add(){
        return view('add');
    }
    function addfn(Request $request){
        $request->validate([
            'bname'=>'required',
            'uname' => 'required',
            'price' => 'required',
        ]);
        Lib::create([
            'bname' =>$request->bname,
            'uname' =>$request->uname,
            'price' =>$request->price,
        ]);
        return 'success';

    }

    function view(){
        $data = Lib::all();
        return view('disp',compact('data'));
    }

    function deletes(int $id){
        $request = Lib::findOrFail($id);
        $request->delete();
        return redirect('views');
    }

    function updates(int $id){
        $request = Lib::findOrFail($id);
        return view('update',compact('request'));

    }
    function updatez(Request $request,int $id){
        $request->validate([
            'bname'=>'required',
            'bname'=>'required',
            'price'=>'required',
        ]);

        $new = Lib::findOrFail($id);
        $new->update([
            'bname'=>$request->bname,
            'uname'=>$request->uname,
            'price'=>$request->price,
        ]);
        return redirect('views');
    }
}
