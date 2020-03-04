<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;
use App\Produto;
use App\AvaliacaoLoja;

class LojaController extends Controller
{

    public function create() {
        $loja = Auth::user()->loja;
        if ($loja != null) {
            return redirect('minha-loja');
        }

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
            'image' => 'required|image|dimensions:ratio=1:1',
        ], [
            'required' => 'Esse campo é obrigatório',
            'image' => 'O arquivo deve ser uma imagem apenas',
            'dimensions' => 'O tamanho da imagem deve ser de proporção 1:1',
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
        
        $user = Auth::user();
        $loja->user()->associate($user);
        $loja->save();
    
        return redirect('meus-produtos');
    }

    public function show($id) {
        $user = Auth::user();
        $loja = \App\Loja::find($id);
        $ratings = AvaliacaoLoja::where('store_id', $id)->get();
        $ratingsAvg = collect($ratings)->avg('rate');
        $ratingsAvg = round($ratingsAvg, 0);
        $products = Produto::where("store_id", $id)->get(); 
        
        return view('loja', compact('loja', 'products', 'ratings', 'ratingsAvg', 'user'));
    }

    public function edit() {
        $user = Auth::user();
        $loja = $user->loja;
        $categories = \App\Categoria::all();

        return view('minha-loja', compact('user', 'loja', 'categories'));
    }

    public function update(Request $request) {
        $this->validate($request, [
            'name_store' => 'required|string',
            'location' => 'required|string',
            'category_id' => 'required',
            'description' => 'required|string',
            'criacao' => 'required',
            'image' => 'required|image|dimensions:ratio=1:1',
        ], [
            'required' => 'Esse campo é obrigatório',
            'image' => 'O arquivo deve ser uma imagem apenas',
            'dimensions' => 'O tamanho da imagem deve ser de proporção 1:1',
        ]);

        $dados = $request->all();
        
        $user = Auth::user();
        $loja = $user->loja;

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

        return redirect('minha-loja')->with('success','Dados atualizados com sucesso.');
    }

    public function destroy() {
        $user = Auth::user();
        $loja = $user->loja;
        $loja->delete();

        return redirect('configuracoes');
    }
}
