<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        $avaliacaoProduto = AvaliacaoProduto::create($request->all());
        dd($avaliacaoProduto);

    return redirect('/produto/{id}');
    }
}