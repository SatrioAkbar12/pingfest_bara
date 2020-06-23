<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seminar;

class SeminarController extends Controller
{
    public function register(){
        return view('seminar/seminar_regist');
    }

    public function simpan_data(Request $request){
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'email' => 'required',
        //     'no_hp' => 'required'
        // ]);

        Seminar::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'no_hp'=>$request->no_hp
        ]);

        return redirect('/seminar');
    }

    // public function detail(){
    //     return view('seminar/seminar_detail');
    // }
}
