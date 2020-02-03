<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncluirController extends Controller
{
    function index() {
        return view('incluir-produto');
    }
}
