<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller


{
    function create() {
        return view('incluir-produto');
    }

    public function store(Request $request)
    {        
        auth()->user();
        $produto = Produto::create($request->all());
        
        return redirect('/');
    }
}