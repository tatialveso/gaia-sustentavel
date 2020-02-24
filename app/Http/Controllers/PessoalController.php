<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class PessoalController extends Controller
{
    function index() {
        $produtos = Produto::where('category_id', 1)->get();

        return view('higiene', compact('produtos'));
    }
}
