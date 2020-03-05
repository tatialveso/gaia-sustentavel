<?php

namespace App\Http\Controllers;

use App\AvaliacaoProduto;
use App\Produto;
use Illuminate\Http\Request;



class AvaliacaoProdutoController extends Controller {   

    public function avaliacaoBlocked(Request $request) {
        $id = $request->get('id');
        // return redirect()->route('produto', ['id' => $id]);
        return redirect('produto/'. $id); // outra forma de escrever. olhar na web.php
    }

    public function store(Request $request, $product_id) {
        $avaliacaoProduto = AvaliacaoProduto::make($request->all());
        $avaliacaoProduto->product_id = $product_id;
        $avaliacaoProduto->save();
 
        return back();
    }
}