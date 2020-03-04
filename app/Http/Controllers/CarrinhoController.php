<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;
use App\CupomDesconto;
use App\User;
use App\UF;
use DB;

class CarrinhoController extends Controller
{
    function __construct() // Só para usuarios logados.
    {
        $this->middleware('auth');
    }
    
    public function add(Request $request) {
        $produto_id = $request->input('id');
        $produto = Produto::find($produto_id);
        $quantidade = $request->input('quantity');
            
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);
        
        if (isset($carrinhos['itens'][$produto['id']])) {
            $carrinhos['itens'][$produto['id']]['quantidade'] += $quantidade;
        } else {
            $carrinhos['itens'][$produto['id']] = [
                'quantidade' => $quantidade,
                'produto' => $produto
            ];
        }

        session()->put('carrinho', $carrinhos);
        
        $request->session()->flash('mensagem-sucesso', 'Produto adicionado do carrinho com sucesso!');
        return redirect()->route('carrinho.index');
    }

    public function index() {
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);

        // dd($carrinhos);
        return view('carrinho', compact('carrinhos'));
    }

    function delete(Request $request) {
        // PROCURAR UNSET
        $produto_id = $request->input('id');
        $produto = Produto::find($produto_id);
        $deletar = $request->session()->forget(['quantidade', 'produto']);

        $request->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');
            return redirect()->route('carrinho.index');

        dd($deletar);           
    }

    public function checkout(Request $request) {
        $ufs = \App\UF::all();
        $users = Auth::user()->get();

        return view('checkout', compact('ufs', 'users'));
    }

    public function complete(Request $request) {
        

        return redirect()->route('carrinho.compras');
    } 

    
}