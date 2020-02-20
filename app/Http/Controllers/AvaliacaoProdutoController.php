<?php

namespace App\Http\Controllers;

use App\AvaliacaoProduto;
use Illuminate\Http\Request;

class AvaliacaoProdutoController extends Controller
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
        return view('produto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $product_id)
    {

        $avaliacaoProduto = AvaliacaoProduto::make($request->all());
        $avaliacaoLoja->product_id = $product_id;
        $avaliacaoLoja->save();
        // dd($avaliacaoProduto);
        // dd($request->all());

    return redirect('/produto/{id}');
    }
}