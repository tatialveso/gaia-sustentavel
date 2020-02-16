<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;

class IncluirController extends Controller
{
    function create() {
        return view('incluir-produto');
    }

    public function store(Request $request)
    {        
        $data = $request->all();
        
        $produto = Produto::make($data);
        $produto->store_id = 1; //TODO pegar user da sessão.
        $produto->save();

        return redirect('/');
    }
}