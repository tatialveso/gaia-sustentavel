<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Loja;

class ProdutoController extends Controller
{
    public function index() {
        $user = Auth::user();
        $loja = $user->loja->id;
        $products = Produto::where('store_id', $loja)->get();

        return view('meus-produtos', compact('products', 'loja', 'user'));
    }

    public function create() {
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();
        
        return view('incluir-produto', compact('categories', 'subcategories'));
    }

    public function store(Request $request) {        
        $dados = $request->all();
        $loja = Auth::user()->loja->id;

        $products = new \App\Produto();
        $products->name = $dados['name'];
        $products->price = $dados['price'];
        $products->description = $dados['description'];
        $products->composition = $dados['composition'];
        $products->category_id = $dados['category_id'];
        $products->subcategory_id = $dados['subcategory_id'];
        $products->store_id = $loja;
        
        if($file = $request->file('img_product')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/produtos', $name)) {
                $products->img_product = $name;
            };
        };
        
        $products->save();

        return redirect('/meus-produtos');
    }

    public function show($id) {
        $product = \App\Produto::find($id);
        $category =  \App\Produto::find($id)->category_id;
        $relacionados = Produto::where('category_id', $category)->get();

        return view('produto',compact('product', 'relacionados'));
    }

    public function edit($id) {
        $products = \App\Produto::find($id);
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();

        return view('meu-produto-edit',compact('products', 'categories', 'subcategories'));


    }    
    public function update(Request $request, $id) {
        $dados = $request->all();
        
        $products = \App\Produto::find($id);
        $products->name = $dados['name'];
        $products->price = $dados['price'];
        $products->description = $dados['description'];
        $products->composition = $dados['composition'];

        if($file = $request->file('img_product')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/produtos', $name)) {
                $products->img_product = $name;
                
            };
        };
        $products->save();

        return redirect('/meus-produtos');
    }     

    public function destroy($id) {
        $products = \App\Produto::find($id);
        $products->delete();

        return back();
    }
}