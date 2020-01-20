<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComoController extends Controller
{
    function show () {
        return view('como-funciona');
    }
}
