<?php

namespace App\Http\Controllers;

use App\AvaliacaoLoja;
use Illuminate\Http\Request;

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
    // public function create() {
    //     return view('loja');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $store_id)
    {
        // $dados = $request->all();
        
        $avaliacaoLoja = AvaliacaoLoja::make($request->all());
        $avaliacaoLoja->store_id = $store_id;
        $avaliacaoLoja->save();

        return redirect('/loja/{id}');
    }


    public function show($id) {
        $loja = \App\Loja::find($id);
        // $produto = \App\Produto::all(); = aparecer produtos só daquela loja
        return view('loja', compact('loja'));
    }

}
