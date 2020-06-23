<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function itv(){
        return view('itv/itv_home');
    }

    public function semnas(){
        return view('seminar/seminar_home');
    }
}
