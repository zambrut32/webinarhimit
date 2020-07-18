<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sertifikat;

class InputController extends Controller
{
    public function tambah(Request $request){
        $this->validate($request ,[
            'name'=>'required',
            'email'=>'required',
            'link'=>'required',
        ]);

        $tambah = new Sertifikat;
        $tambah->name = $request->name;
        $tambah->email = $request->email;
        $tambah->link = $request->link;
        $tambah->save();
        return redirect('/')->with('success',' ');


    }
    public function input(){
        return view('content');
    }
    public function list(){
        $hasil = Sertifikat::all();
        return view('list',['liat'=>$hasil]);
    }
}
