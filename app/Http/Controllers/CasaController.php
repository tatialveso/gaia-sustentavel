<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasaController extends Controller
{
    function index() {
        return view('casa');
    }
}
