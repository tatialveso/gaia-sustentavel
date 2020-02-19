<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{
    function index() {
        return view('vendas', [
            'user' => Auth::user(),
        ]);
    }
}
