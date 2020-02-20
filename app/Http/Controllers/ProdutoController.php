<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index() {
        $products = \App\Produto::all();

        return view('meus-produtos', compact('products'));
    }

    function create() {
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();
        $loja = \App\Loja::find($id);
        
        return view('incluir-produto', compact('categories', 'subcategories'));
    }

    public function store(Request $request) {        
        $dados = $request->all();

        $products = new \App\Produto();
        $products->name = $dados['name'];
        $products->price = $dados['price'];
        $products->description = $dados['description'];
        $products->composition = $dados['composition'];
        $products->category_id = $dados['category_id'];
        $products->subcategory_id = $dados['subcategory_id'];
        $products->store_id = $dados['store_id'];
        
        if($file = $request->file('img_product')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/produtos', $name)) {
                $loja->image = $name;
            };
        };

        $products->save();

        return redirect('/meus-produtos');
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
        $dados = $request->all();
        
        $products = \App\Produto::find($id);
        $products->name = $dados['name'];
        $products->price = $dados['price'];
        $products->description = $dados['description'];
        $products->composition = $dados['composition'];
        $products->category_id = $dados['category_id'];
        $products->subcategory_id = $dados['subcategory_id'];

        if($file = $request->file('img_product')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/produtos', $name)) {
                $products->image = $name;
                
            };
        };
        $products->save();

        return redirect('meus-produtos');
    }     

    public function destroy($id) {
        $products = \App\Produto::find($id);
        $products->delete();

        return back();
    }
}