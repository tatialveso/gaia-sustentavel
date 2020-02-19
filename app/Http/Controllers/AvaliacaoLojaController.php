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
    public function create() {
        return view('loja');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $avaliacaoLoja = AvaliacaoLoja::create($request->all());

    return redirect('/loja/{id}');
    }


}
