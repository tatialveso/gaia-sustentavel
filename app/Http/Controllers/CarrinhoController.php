<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;

class CarrinhoController extends Controller
{
    function __construct() // Só para usuarios logados.
    {
        $this->middleware('auth');
    }
    
    function index() {

        $pedidos = Pedido::where([
            status => 'RE',
            user_id => Auth::id()
        ])->get();

        return view('/carrinho', compact('pedidos'));
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
        }  // ver para qual página o usuário será redicionado.


        function delete() {
            $this->middleware('VerifyCsrToken');

            $req = Request();
            $idPedido = $req->input('pedido_id');
            $idProduto = $req->input('idProduto');
            $remove_apenas_item = (boolean)$req->input('item'); // true se remove só um item e false para todos os produtos.
            $idUsuário = Auth::id();

            $idPedido = Pedido::consultaId([  // Verifica se o pedido é do usuário logado e se está em status adequado.
                'id' => $idPedido,
                'user_id' => $idUsuario,
                'status' => 'RE' // Reservado
            ]);
            if(empty($idPedido)) {
                $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
                return redirect()->route('/'); // Verificar se vai para esta página mesmo.
            }

            $where_produto = [
                'pedido_id' => $idPedido,
                'produto_id' => $idProduto
            ];

            $produto = PedidoProduto::where($where_produto)->orderBy('id', 'desc')->first(); // 'desc' é do > para o <
            if(empty($produto->id)) {
                $req->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
                return redirect()->route('/');
            }

            if($remove_apenas_item) {
                $where_produto['id'] = $produto->id; // Remove o último produto adicionado.
            }
            PedidoProduto::where($where_produto)->delete(); // Remove todos os produtos.

            $check_pedido = PedidoProduto::where([    // Verifica se há algum outro produto vinculado a este pedido.
                'pedido_id' => $produto->pedido_id
                ])->exists();

            if(!$check_pedido) {   // Se o pedido estiver vazio, apaga o pedido.
                Pedido::where([
                    'id' => $produto->pedido_id
                ])->delete();
            }

            $req->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');
                return redirect()->route('/'); // Verificar se vai para esta página mesmo.
                
        }

        public function concluir() {
            $this->middleware('VerifyCsrToken');

            $req = Request();
            $idPedido = $req->input('pedido_id');
            $idUsuário = Auth::id();

            $check_pedido = PedidoProduto::where([    // Verifica se há algum outro produto vinculado a este pedido.
                'id' => $idPedido,
                'user_id' => $idUsuario,
                'status' => 'RE'
                ])->exists();
            if(!check_pedido) {
                $req->session()->flash('mensagem-falha', 'Pedido não encontrado!');
                return redirect()->route('/');
            } 

            $check_produto = PedidoProduto::where([
                'pedido_id' => $idPedido
                ])->exists();
            if(!$check_produtos) {
                $req->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
                return redirect()->route('/');
            }

            PedidoProduto::where([
                'id' => $idPedido
            ])->update([
                'status' => 'PA'
            ]);

            Pedido::where([
                'id' => $idPedido
            ])->update([
                'status' => 'PA'
            ]);

            $req->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!!');

            return redirect()->route('/');
        } 
    }


