<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class boolean_controll extends Controller
{
    public function index(){
      return view('index');
    }

    public function privacyPolicy(){
      return view('privacyPolicy');
    }
}
