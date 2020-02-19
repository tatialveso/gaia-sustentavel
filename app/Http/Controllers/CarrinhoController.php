<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;

class CarrinhoController extends Controller
{
    function __construct() 
    {
        $this->middleware('auth');
    }
    
    function index() {

        $pedidos = Pedido::where([
            status => 'RE',
            user_id => Auth::id()
        ])->get();

        return view('carrinho', compact('pedidos'));
    }

    function add() {
        $this->middleware('VerifyCsrToken');

        $req = Request();
        $idProduto = $req->input('id');

        $produto = Produto::find($idProduto);
        if(empty($produto->id)) {
            $req->session()->flash('mensagem falha','Produto não encontrado na nossa loja');
            return redirect()->route();  // inserir a rota da página de busca de produto.
        }

        $idUsuario = Auth::id();

        $idPedido = Pedido::consultaId([  // Para verificar se o usuário possui um pedido em aberto, se sim ele é reutilizado. Se não, é gerao um novo.
            'user_id' => $idUsurario,
            'status' => 'RE'    //produto reservado
        ]);

        if(empty($idPedido)) {
            $pedido_novo = Pedido::create([
                'user_id' => $idUsurario,
                'status' => 'RE'    //produto reservado
            ]);

            $idPedido = $pedido_novo->id;
        }

    PedidoProduto::create([
        'pedido_id' => $idPedido,
        'produto_id' => $idProduto,
        'valor' => $produto->price,
        'status' => 'RE'
    ]);
    $req->session()->flash('mensagem sucesso', 'Produto adicionado ao carrinho com sucesso!');
    return redirect()->route();   // Para verificar se o usuário possui um pedido em aberto, se sim ele é reutilizado. Se não, é gerao um novo.
    }
}
