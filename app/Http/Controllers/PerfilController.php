<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Produto;

class PerfilController extends Controller
{
    public function index() {
        return view('perfil');
    }

    public function show($id) {
        $produtos = Produto::latest()->get();
        // dd($produtos);

        return view('perfil', compact('produtos'));
        
    }
}
