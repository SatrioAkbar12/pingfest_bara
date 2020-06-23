<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AkunITV;

class LoginRegisterController extends Controller
{
    public function register(){
        return view('itv/itv_register');
    }

    public function simpan_akun(Request $request){
        AkunITV::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'pass'=>$request->pass
        ]);

        return redirect("/it-venture/pendaftaran");
    }

    public function login(){
        return view("itv/itv_login");
    }

    public function cek_akun(Request $request){
        $cek_akun = AkunITV::find($request->username);
    }
}
