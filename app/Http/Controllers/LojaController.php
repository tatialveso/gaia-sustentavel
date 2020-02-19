<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        // 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = \App\Categoria::all();

        return view('cadastro-loja', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $dados = $request->all();

        if($file = $request->file('image')) {
            $name = $file->getClientOriginalName();
            if($file->move('img/lojas', $name)) {
                $loja = new \App\Loja();
                $loja->name_store = $dados['name_store'];
                $loja->location = $dados['location'];
                $loja->category_id = $dados['category_id'];
                $loja->description = $dados['description'];
                $loja->criacao = $dados['criacao'];
                $loja->image = $name;
        
                $loja->save();

                return redirect('minha-loja/{id}');
            };
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $loja = \App\Loja::find($id);
        return view('loja', compact('loja'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $loja = \App\Loja::find($id);
        $categories = \App\Categoria::all();

        return view('minha-loja', compact('loja', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $dados = $request->all();

        $loja = \App\Loja::find($id);
        $loja->name_store = $dados['name_store'];
        $loja->location = $dados['location'];
        $loja->category_id = $dados['category_id'];
        $loja->description = $dados['description'];
        $loja->criacao = $dados['criacao'];

        $loja->save();

        return redirect('meus-produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $loja = \App\Loja::find($id);
        $loja->delete();

        return back();
    }
}
