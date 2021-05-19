<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function isHome(){
        return view('index');
    }
    public function isHome2(){
        return view('index2');
    }
}
