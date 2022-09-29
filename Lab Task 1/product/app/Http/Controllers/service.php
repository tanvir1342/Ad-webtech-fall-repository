<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class service extends Controller
{
    public function index(){
        $message = "Welcome";
        return view('product')->with('message', $message);
    }

}
