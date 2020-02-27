<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Produto;
use App\AvaliacaoLoja;

class LojaController extends Controller
{

    public function create() {
        $categories = \App\Categoria::all();

        return view('cadastro-loja', compact('categories'));
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name_store' => 'required|string',
            'location' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string',
            'criacao' => 'required',
            'image' => 'required',
        ], [
            'required' => 'Esse campo é obrigatório',
        ]);

        $dados = $request->all();

        $loja = new \App\Loja();
        $loja->name_store = $dados['name_store'];
        $loja->location = $dados['location'];
        $loja->category_id = $dados['category_id'];
        $loja->description = $dados['description'];
        $loja->criacao = $dados['criacao'];

        if($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/lojas', $name)) {
                $loja->image = $name;
            };
        };
        
        $loja->save();
    
        return redirect('meus-produtos');
    }

    public function show($id) {
        $loja = \App\Loja::find($id);
        $ratings = AvaliacaoLoja::where('store_id', $id)->get(); 
        $products = Produto::where("store_id", $id)->get(); 
        
        return view('loja', compact('loja', 'products', 'ratings'));
    }

    public function edit($id) {
        $loja = \App\Loja::find($id);
        $categories = \App\Categoria::all();

        return view('minha-loja', compact('loja', 'categories'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'name_store' => 'required|string',
            'location' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string',
            'criacao' => 'required',
            'image' => 'required',
        ], [
            'required' => 'Esse campo é obrigatório',
        ]);

        $dados = $request->all();
        
        $loja = \App\Loja::find($id);
        $loja->name_store = $dados['name_store'];
        $loja->location = $dados['location'];
        $loja->category_id = $dados['category_id'];
        $loja->description = $dados['description'];
        $loja->criacao = $dados['criacao'];

        if($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/lojas', $name)) {
                $loja->image = $name;
                
            };
        };
        $loja->save();

        return redirect('meus-produtos');
    }

    public function destroy($id) {
        $loja = \App\Loja::find($id);
        $loja->delete();

        return redirect('configuracoes');
    }
}
