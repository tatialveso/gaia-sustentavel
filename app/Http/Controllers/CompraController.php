<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompraController extends Controller
{
    function index() {
        return view('compras');
    }
}
