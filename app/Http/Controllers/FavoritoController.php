<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class FavoritoController extends Controller
{
    function index() {
        return view('favoritos', [
            'user' => Auth::user(),
        ]);
    }
}
