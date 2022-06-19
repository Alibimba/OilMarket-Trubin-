<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function co(){
        return view('co');
    }
    public function welcome(){
        return view('welcome');
    }
    public function comp(){
        return view('comp');
    }
}
