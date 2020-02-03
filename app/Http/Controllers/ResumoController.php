<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumoController extends Controller
{
    function index() {
        return view('resumo');
    }
}
