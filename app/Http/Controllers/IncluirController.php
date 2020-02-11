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
        $produto = Produto::create($request->all());
        
        return redirect('/');
    }
}