<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function dashboard(){
        return view('itv_lomba');
    }

    public function checkout(){
        return view('itv_checkout');
    }
}
