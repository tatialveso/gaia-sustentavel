<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendaController extends Controller
{
    function index() {
        return view('vendas');
    }
}
