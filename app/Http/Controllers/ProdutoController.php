<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\Loja;
use Illuminate\Support\Facades\Input;

class ProdutoController extends Controller
{
    public function index() {
        $products = Produto::where('store_id', '')->get();

        return view('meus-produtos', compact('products'));
    }

    public function create() {
        $categories = \App\Categoria::all();
        $subcategories = \App\Subcategoria::all();
        
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
        $relacionados = Produto::where('category_id', '')->get(); //pegar produtos com o mesmo category_id que o produto mostrado
        
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

    public function search(Request $request) {
        
        if($request->post('busca')==false) {
            return view('busca');
        }

        $products = Produto::where('name', 'like', '%'.$request->post('busca').'%')->orWhere('category_id', 'like', '%'.$request->post('busca').'%')->get();
        return view('busca', $products);


        // $buscar = $request->post('busca');
        // $products = Products::table('products')->where('name', 'LIKE', '%' . $buscar . '%')->paginate(10);
        // return view('index', ['products' => $products]);
    }
}