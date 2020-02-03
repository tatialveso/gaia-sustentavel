<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComoController extends Controller
{
    function index() {
        return view('como-funciona');
    }
}
