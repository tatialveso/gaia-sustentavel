<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Categoria;
use App\Subcategoria;

//use App\Produto as Products;
use Illuminate\Http\Request;

class IncluirController extends Controller

{
    public function index() {
        $products = \App\Produto::all();

        return view('meus-produtos', compact('products'));
    }

    function create() {
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();
        
        return view('incluir-produto', compact('categories', 'subcategories'));
    }

    public function store(Request $request) {        
        $data = $request->all();
        
        $produto = Produto::make($data);
        $produto->store_id = 1; //TODO pegar user da sessão.
        $produto->save();
        
        return redirect('/');
    }

    public function show($id) {
        $product = \App\Produto::find($id);
        return view('produto',compact('product'));
    }

    public function edit($id) {
        $products = \App\Produto::find($id);
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();

        return view('meu-produto-edit',compact('products', 'categories', 'subcategories'));


    }    
    public function update(Request $request, Produto $produto) {
            $produto->fill($request->all());
            $produto->save();
    
            return redirect('/meus-produtos');
        }        

    public function destroy($id) {
        $produto->delete();
        return redirect ('/meus-produtos');
    }
}
