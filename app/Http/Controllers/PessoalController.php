<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoalController extends Controller
{
    function index() {
        return view('higiene');
    }
}
