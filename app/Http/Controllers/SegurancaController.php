<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegurancaController extends Controller
{
    function index(Request $request) {
        // $user = auth()->user();
        // var_dump($user);
        return view('seguranca');
    }
}
