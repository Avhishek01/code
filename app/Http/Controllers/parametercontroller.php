<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parametercontroller extends Controller
{
    function show($name)
    {
        return "HELLO PARAMETER CONTROLLER"  .  $name;
    }
}
