<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{
    function index() {
       
        $compras = Pedido::where([
            'status' => 'PA',
            'user_id' => Auth::id()
            ])->orderBy('created_at', 'desc')->get();
        
        return $compras;

        $cancelados = Pedido::where([
            'status' => 'PA',
            'user_id' => Auth::id()
            ])->orderBy('updated_at', 'desc')->get();
        
        return view('compras', compact('compras', 'cancelados'));
    }

    public function cancel(Request $request) {

        $idPedido = $request->input('request_id');
        $idspedido_produto-> $request->input('id');
        $idUsuário = Auth::id();

        if(empty($idspedido_produto)) {
            $request->session()->flash('mensagem-falha', 'Nenhum item selecionado');
            return redirect()->route('historico-compras');
        }

        $check_pedido = Pedido::where([
            'id' => $idPedido,
            'user_id' => $idUsuario,
            'status' => 'PA'
            ])->exists();

        if(!check_pedido) {
            $request->session()->flash('mensagem-falha', 'Pedido não encontrado para cancelamento!');
            return redirect()->route('historico-compras');
        } 

        $check_produto = PedidoProduto::where([
            'request_id' => $idPedido,
            'status' => 'PA'
            ])->whereIn('id', $idspedido_produto)->exists();

        if(!$check_produtos) {
            $request->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('historico-compras');
        }

        $check_pedido_cancel = PedidoProduto::where([   // Verifica se ainda há no pedido algum produto.
            'request_id' => $idPedido,
        ])->exists();

        if(!check_pedido_cancel) {  // Se não sobrou nenhum produto, é cancelado o pedido.
            Pedido::where([
                'id' => $idPedido
            ])->update([
                'status' => 'CA'
            ]);

            $request->session()->flash('mensagem-sucesso', 'Compra cancelada com sucesso!');
        } else {
            $request->session()->flash('mensagem-sucesso', 'Item(s) da compra cancelados com sucesso!');
        }

        return redirect()->route('historico-compras');
    }
}
