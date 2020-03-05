<?php

namespace App\Http\Controllers;

use App\AvaliacaoLoja;
use Illuminate\Http\Request;
use App\Produto;

class AvaliacaoLojaController extends Controller {

    public function avalBlocked(Request $request) {
        //dd($request->all());
        $id = $request->get('id');
        // return redirect()->route('loja', ['id' => $id]);
        return redirect('loja/'. $id); // outra forma de escrever. olhar na web.php
    }

    public function store(Request $request, $store_id) {
        $avaliacaoLoja = AvaliacaoLoja::make($request->all());
        $avaliacaoLoja->store_id = $store_id;
        $avaliacaoLoja->save();

        return back();
    }

}
