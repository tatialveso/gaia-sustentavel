<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    function index() {
        return view('sobre');
    }
}
