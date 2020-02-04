<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create() {
        return view('cadastro');
    }

    public function store(Request $request) {
        // 
    }
}
