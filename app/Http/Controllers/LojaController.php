<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    function index() {
        return view('loja');
    }
}
