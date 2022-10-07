<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class passingcontroller extends Controller
{
    function show(){
        $name = 'Avhishek';
        return view('passingdata',['nm'=> $name]);
    }
}
