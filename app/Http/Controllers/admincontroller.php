<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function show(){
        return view('admin.admin1');
    }
}
