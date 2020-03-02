<?php

namespace App\Http\Controllers;

use App\AvaliacaoLoja;
use Illuminate\Http\Request;
use App\Produto;

class AvaliacaoLojaController extends Controller
{

    public function store(Request $request, $store_id) 
    {
        // $dados = $request->all();
        
        $avaliacaoLoja = AvaliacaoLoja::make($request->all());
        $avaliacaoLoja->store_id = $store_id;
        $avaliacaoLoja->save();

        return back(); // ele apenas atualiza a página quando o formulário é enviado
    }



}
