<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;

class CarrinhoController extends Controller
{
    function __construct() 
    {
        $this->middleware('auth');
    }
    
    
    function index() {

        $pedidos = Pedido::where([
            user_id => Auth::id()
        ])->get();

        dd([
            $pedidos,
            $pedidos[0]->pedido_produtos,
            $pedidos[0]->pedido_produtos[0]->produto
        ]);

        return view('carrinho', compact('pedidos'));
    }
}
