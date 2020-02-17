<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use App\Subcategoria;

//use App\Produto as Products;
use Illuminate\Http\Request;

class IncluirController extends Controller

{
    public function index()
    {
        return view('incluir-produto');
    }

    function create() {
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();
        
        return view('incluir-produto', compact('categories', 'subcategories'));
    }

    public function store(Request $request)
    {        
        $data = $request->all();
        
        $produto = Produto::make($data);
        $produto->store_id = 1; //TODO pegar user da sessão.
        $produto->save();

        dd($data);
        
        return redirect('/');
    }

    public function show($id) {
        $products = \App\Produto::all();
        return view('meus-produtos',compact('products'));
    }

    public function edit($id) {
        $products = \App\Produto::all();
        return view('meu-produto-edit',compact('products'));


    }    
    public function update(Request $request, Produto $produto)
        {
            $produto->fill($request->all());
            $produto->save();
    
            return redirect('/meus-produtos/{id}');
        }        

    public function destroy($id) {
        $produto->delete();
        return redirect ('/meus-produtos/{id}');
    }
}
