<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\Pagamento;
use App\PedidoProduto;
use App\User;
use App\UF;
use DB;

class CarrinhoController extends Controller
{
    function __construct() {
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

        $carrinho_total = 0;
        foreach($itens as $item) {
            $item['total'] = ['itens']['quantidade'] * ['itens']['produto']['price'];
            $carrinho_total += $item['total'];        
        }

        // $idProduto = $request->input('id');

        // $produto = Produto::find($idProduto);

        // if(empty($produto->id)) {
        //     $request->session()->flash('mensagem falha','Produto não encontrado na nossa loja');
        //     return redirect()->route('carrinho.index');  // inserir a rota da página de busca de produto.
        // }

        // $idUsuario = Auth::id();

        // //Tentar trazer o pedido
        // //Caso não exista, crie um novo pedido e adicione o preço dele, somando os itens
        // //Caso ele exista, você vai adicionar o produto, 



        // $idPedido = Pedido::consultaId([  // Para verificar se o usuário possui um pedido em aberto, se sim ele é reutilizado. Se não, é gerado um novo.
        //     'user_id' => $idUsuario,
        //     'status' => 'RE'    //produto reservado
        // ]);

        if(empty($idPedido)) {
            $pedido_novo = Pedido::create([
                'user_id' => $idUsuario,
                'price' => $produto['price'],
                'status' => 'RE'    //produto reservado
            ]);

            $idPedido = $pedido_novo->id;
        }

        PedidoProduto::create([ 
            'request_id' => $idPedido,
            'product_id' => $idProduto,
            'quantity' => $request->input('quantity')
        ]);

        // //dd($pedidos);
    }

    public function index() {
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);

        // dd($carrinhos);
        return view('carrinho', compact('carrinhos'));
    }

    public function delete(Request $request) {
        $produto_id = $request->input('id');
        $produto = Produto::find($produto_id);
        $carrinhos = session()->get('carrinho', ['itens' => [], 'total' => 0]);

        unset($carrinhos['itens'][$produto_id]);
        
        session()->put('carrinho', $carrinhos);

        $request->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');
        return redirect()->route('carrinho.index');
    }

    public function checkout(Request $request) {
        $ufs = \App\UF::all();
        $users = Auth::user()->get();

        return view('checkout', compact('ufs', 'users'));
    }

    public function complete(Request $request) {
        $carrinho = session('carrinho');
        $produto_id = $request->input('id');
        $user = Auth::user()->id;

        $dados = $request->all();
        $pagamento = new \App\Pagamento();
        $pagamento->user_id = $user;
        $pagamento->card_name = $dados['card-name'];
        $pagamento->card_number = $dados['card-number'];
        $pagamento->card_validate = $dados['card-validate'];
        $pagamento->card_code = $dados['card-code'];
        $pagamento->save();

        $pedido = new \App\Pedido();
        $pedido->user_id = $user;
        $pedido->payment_id = $pagamento->id;
        $pedido->total = $carrinho['total'];
        $pedido->save();

        foreach ($carrinho['itens'] as $item) {
            $produtoPedido = new \App\PedidoProduto();
            $produtoPedido->request_id = $pedido->id;
            $produtoPedido->product_id = $item['produto']['id'];
            $produtoPedido->quantity = $item['quantidade'];
            $produtoPedido->save();
        }

        return redirect('/historico-compras');
    } 

    public function historico(Request $request) {
        $user = Auth::user();
        $pedidos = $user->pedidos->produtos;
    
        return view('compras', compact('pedidos'));
    }
    
}