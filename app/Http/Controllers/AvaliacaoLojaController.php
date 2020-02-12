<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacaoLojaController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avaliacaoLoja = AvaliacaoLoja::create($request->all());

    return redirect('/loja/{id}');
    }

}
