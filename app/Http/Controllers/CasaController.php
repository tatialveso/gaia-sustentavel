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

    public function limpezaIndex() {
        $limpezas = Produto::where('subcategory_id', 6)->get();

        return view('cat-limpeza', compact('limpezas'));
    }

    public function aromatizadorIndex() {
        $aromatizadores = Produto::where('subcategory_id', 7)->get();

        return view('cat-aromatizador', compact('aromatizadores'));
    }
}
