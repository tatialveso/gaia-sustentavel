<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncluirController extends Controller
{
    function show () {
        return view('incluir-produto');
    }
}
