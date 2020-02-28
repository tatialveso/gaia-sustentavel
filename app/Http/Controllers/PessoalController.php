<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class PessoalController extends Controller
{
    public function index() {
        $produtos = Produto::where('category_id', 1)->get();

        return view('higiene', compact('produtos'));
    }

    public function cabeloIndex() {
        $cabelos = Produto::where('subcategory_id', 1)->get();

        return view('cat-cabelo', compact('cabelos'));
    }

    public function rostoIndex() {
        $rostos = Produto::where('subcategory_id', 2)->get();

        return view('cat-rosto', compact('rostos'));
    }

    public function cosmeticosIndex() {
        $cosmeticos = Produto::where('subcategory_id', 3)->get();

        return view('cat-cosmeticos', compact('cosmeticos'));
    }

    public function banhoIndex() {
        $banhos = Produto::where('subcategory_id', 4)->get();

        return view('cat-banho', compact('banhos'));
    }

    public function pessoalIndex() {
        $pessoais = Produto::where('subcategory_id', 5)->get();

        return view('cat-pessoal', compact('pessoais'));
    }
}