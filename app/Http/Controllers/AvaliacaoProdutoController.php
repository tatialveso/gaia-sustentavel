<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoProdutoController extends Controller
{ 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avaliacaoProduto = Produto::create($request->all());
        dd($avaliacaoProduto);
        
    return redirect('/produto/{id}');
    }
    }
    
}
