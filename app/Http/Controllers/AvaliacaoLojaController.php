<?php

namespace App\Http\Controllers;

use App\AvaliacaoLoja;
use Illuminate\Http\Request;
use App\Produto;

class AvaliacaoLojaController extends Controller
{
    // protected $request;

    // public function __construct(Request $request){
    //     dd($request);
    //     $this->request = $request;
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('loja');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $store_id) {
        // $dados = $request->all();
        
        $avaliacaoLoja = AvaliacaoLoja::make($request->all());
        $avaliacaoLoja->store_id = $store_id;
        $avaliacaoLoja->save();

        return back(); // ele apenas atualiza a página quando o formulário é enviado
    }


    public function show($id) {
        $loja = \App\Loja::find($id);
        $ratings = AvaliacaoLoja::where('store_id', $id)->get(); 
        $products = Produto::where('store_id', $id)->get(); 
        
        return view('loja', compact('loja', 'products', 'ratings'));
    }

}
