<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    function index() {
        return view('compras', [
            'user' => Auth::user(),
        ]);
    }
}
