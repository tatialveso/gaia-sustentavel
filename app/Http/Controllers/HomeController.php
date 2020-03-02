<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() // Mostra apenas os produtos ativos na página inicial/index.
    {
        $produtos = Produto::latest()->take(6)->get(); //mostra os últimos produtos adicionados na base de dados na parte de "Novidades"
        
        $registros = Produto::where([
            'active' => 'S'
        ])->take(3)->get();
        return view('index', compact('registros', 'produtos'));
    }

    public function produto($id=null) //Mostra o produto direto da index
    {
        if(!empty($id)) {
            $registro = Produto::where([
                'id'=> $id,
                'active'=> 'S'
            ])->first();
        }
        if(!empty($registro)) {
            return view('produto', compact($registro));
        }

        return redirect()->route('/');
    }
}