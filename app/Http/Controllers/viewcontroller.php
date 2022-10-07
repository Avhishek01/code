<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewcontroller extends Controller
{
    function show(){
        return view('profile');
    }
}
