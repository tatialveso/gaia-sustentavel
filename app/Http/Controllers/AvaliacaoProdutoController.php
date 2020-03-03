<?php

namespace App\Http\Controllers;

use App\AvaliacaoProduto;
use App\Produto;
use Illuminate\Http\Request;


class AvaliacaoProdutoController extends Controller
{   
    public function store(Request $request, $product_id)
    {
        //  dd($request->all());

        $avaliacaoProduto = AvaliacaoProduto::make($request->all());
        $avaliacaoProduto->product_id = $product_id;
        $avaliacaoProduto->save();
 
    return back();
    }
}