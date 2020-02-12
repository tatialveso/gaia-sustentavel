<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller {
    public function index() {
        return view('meus-produtos');
    }

    function create() {
        return view('incluir-produto');
    }

    public function store(Request $request) {        
        $produto = Produto::create($request->all());
        
        return redirect('/meus-produtos');
    }

    public function show($id) {
       return view('produto');
    }

    public function edit($id) {
        return view('meu-produto-edit');
    }

    public function update(Request $request, $id) {
        $produto->fill($request->all());
        $produto->save();
        return redirect('/meus-produtos');
    }

    public function destroy($id) {
        $produto = App/Produto::find($id);
        $produto->delete();

        return back();
    }
}