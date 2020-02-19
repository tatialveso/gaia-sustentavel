<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SegurancaController extends Controller
{
    function index(Request $request) {
        return view('seguranca', [
            'user' => Auth::user(),
        ]);
    }
}
