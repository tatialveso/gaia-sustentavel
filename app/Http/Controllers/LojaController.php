<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{

    public function create() {
        $categories = \App\Categoria::all();

        return view('cadastro-loja', compact('categories'));
    }

    public function store(Request $request) {
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
    
        return redirect('minha-loja/{id}');
    }

    public function show($id) {
        $loja = \App\Loja::find($id);
        return view('loja', compact('loja'));
    }

    public function edit($id) {
        $loja = \App\Loja::find($id);
        $categories = \App\Categoria::all();

        return view('minha-loja', compact('loja', 'categories'));
    }

    public function update(Request $request, $id) {
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

        return back();
    }
}
