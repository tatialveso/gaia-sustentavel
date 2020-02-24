<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class CasaController extends Controller
{
    function index() {
        $produtos = Produto::where('category_id', 2)->get();

        return view('casa', compact('produtos'));
    }
}
