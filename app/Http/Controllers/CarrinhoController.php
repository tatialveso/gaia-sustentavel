<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Pedido;
use App\Produto;
use App\PedidoProduto;
use App\CupomDesconto;
use DB;

class CarrinhoController extends Controller
{
    function __construct() // Só para usuarios logados.
    {
        $this->middleware('auth');
    }
    
    public function index() {
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();
        $request_id = 
        $pedido_produtos = PedidoProduto::where('request_id', 1)->get(); // PROCURAR COMO DEIXAR DINAMICO

        // dd($request_id);
        return view('carrinho', compact('pedidos', 'pedido_produtos'));
    }

    public function update (Request $request, $id) {
        $dados = $request->all();

        $produto = \App\PedidoProduto::find($id);
        $produto->quantity = $dados['quantity'];
        $produto->save();
    }

    function add(Request $request) {
        $idProduto = $request->input('id');

        $produto = Produto::find($idProduto);

        if(empty($produto->id)) {
            $request->session()->flash('mensagem falha','Produto não encontrado na nossa loja');
            return redirect()->route('carrinho.index');  // inserir a rota da página de busca de produto.
        }

        $idUsuario = Auth::id();

        //Tentar trazer o pedido
        //Caso não exista, crie um novo pedido e adicione o preço dele, somando os itens
        //Caso ele exista, você vai adicionar o produto, 



        $idPedido = Pedido::consultaId([  // Para verificar se o usuário possui um pedido em aberto, se sim ele é reutilizado. Se não, é gerado um novo.
            'user_id' => $idUsuario,
            'status' => 'RE'    //produto reservado
        ]);

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

        $request->session()->flash('mensagem sucesso', 'Produto adicionado ao carrinho com sucesso!');
        return redirect()->route('carrinho.index');   // Para verificar se o usuário possui um pedido em aberto, se sim ele é reutilizado. Se não, é gerao um novo.
    }

    function delete(Request $request) {

        

        $idPedido = $request->input('request_id');
        $idProduto = $request->input('product_id');
        $remove_apenas_item = (boolean)$request->input('item'); // true se remove só um item e false para todos os produtos.
        $idUsuario = Auth::id();

        $idPedido = Pedido::consultaId([  // Verifica se o pedido é do usuário logado e se está em status adequado.
            'id' => $idPedido,
            'user_id' => $idUsuario,
            'status' => 'RE' // Reservado
        ]);

        if(empty($idPedido)) {
            $request->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index'); 
        }

        $where_produto = [
            'request_id' => $idPedido,
            'product_id' => $idProduto
        ];

        $produto = PedidoProduto::where($where_produto)->orderBy('id', 'desc')->first(); // 'desc' é do > para o <
        if(empty($produto->id)) {
            $request->session()->flash('mensagem-falha', 'Produto não encontrado no carrinho!');
            return redirect()->route('carrinho.index');
        }

        if($remove_apenas_item) {
            $where_produto['id'] = $produto->id; // Remove o último produto adicionado.
        }
            
        PedidoProduto::where($where_produto)->delete(); // Remove todos os produtos.

        $check_pedido = PedidoProduto::where([    // Verifica se há algum outro produto vinculado a este pedido.
            'request_id' => $produto->request_id
        ])->exists();

        if(!$check_pedido) {   // Se o pedido estiver vazio, apaga o pedido.
            Pedido::where([
                'id' => $produto->request_id
            ])->delete();
        }

        $request->session()->flash('mensagem-sucesso', 'Produto removido do carrinho com sucesso!');
            return redirect()->route('carrinho.index');
                
    }

    public function complete(Request $request) {

        $idPedido = $request->input('request_id');
        $idUsuario = Auth::id();

        $check_pedido = PedidoProduto::where([ 
            'id' => $idPedido,
            'user_id' => $idUsuario,
            'status' => 'RE'
        ])->exists();

        if(!check_pedido) {
            $request->session()->flash('mensagem-falha', 'Pedido não encontrado!');
            return redirect()->route('carrinho.index');
        } 

        $check_produtos = PedidoProduto::where([
            'request_id' => $idPedido
        ])->exists();

        if(!$check_produtos) {
            $request->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
            return redirect()->route('carrinho.index');
        }

        Pedido::where(['id' => $idPedido])->update(['status' => 'PA']);

        $request->session()->flash('mensagem-sucesso', 'Compra concluída com sucesso!!');

        return redirect()->route('carrinho.compras');
    } 

    // public function discount(Request $request) {
           
    //     $idPedido = $request->input('request_id');
    //     $cupom-> $request->input('cupom');
    //     $idUsuário = Auth::id();

    //     if(empty($cupom)) {
    //         $request->session()->flash('mensagem-falha', 'Cupom inválido!');
    //         return redirect()->route('carrinho.index');
    //     }

    //     $cupom = CupomDesconto::where([
    //         'localizador' => $cupom,
    //         'ativo' => 'S',
    //     ])->where('validade', '>', date('Y-m-d H:i:s'))->first();

    //     if(empty($cupom->id)) {
    //         $request->session()->flash('mensagem-falha', 'Cupom de desconto não encontrado');
    //         return redirect()->route('carrinho.index');
    //     } 

    //     $check_pedido = Pedido::where([
    //         'id' => $idPedido,
    //         'user_id' => $idUsuario,
    //         'status' => 'RE'
    //     ])->exists();

    //     if(!$check_pedido) {
    //         $request->session()->flash('mensagem-falha', 'Pedido não encontrado para validação!');
    //         return redirect()->route('carrinho.index');
    //     }

    //     $pedido_produtos = PedidoProduto::where(['request_id' => $idPedido,])->get();

    //     if(empty($pedido_produtos)) {
    //         $request->session()->flash('mensagem-falha', 'Produtos do pedido não encontrados!');
    //        return redirect()->route('carrinho.index');
    //     }

    //     $aplicouDesconto = false;
    //     foreach($pedido_produtos as $pedido_produto) {
    //         switch($cupom->type_discount) {
    //             case 'porc':
    //                 $valor_desconto = ($pedido_produto->price = $$cupom->discount) /100;
    //             break;

    //             default:
    //                 $valor_desconto = $cupom->discount;
    //             break;
    //         }
    //     }

    //     $valor_desconto = ($valor_desconto > $pedido_produto->price) ? $pedido_produto->price : number_format($valor_desconto, 2);

    //     switch ($cupom -> type_limit) {
    //         case 'qtd':
    //             $qtd_pedido = PedidoProduto::whereIn('status', ['PA', 'RE'])->where([
    //             'discount_coupon_id' => $cupom->id,
    //             ])->count();
    //             if($qtd_pedido >= $cupom->limit) {
    //                 break;
    //             }

    //             break;

    //         default:
    //             $valor_ckc_descontos = PedidoProduto::whereIn('status', ['PA', 'RE'])->where([
    //                 'discount_coupon_id' -> $cupom->id
    //             ])->sum('discount');

    //             if(($valor_ckc_descontos+$valor_desconto)-> $cupom->limit) {
    //                 break;
    //             }
    //             break;
    //     }

    //     $pedido_produto->discount_coupon_id = $cupom->id;
    //     $pedido_produto->discount = $valor_desconto;
    //     $pedido_produto->update();

    //     $aplicouDesconto = true;

        
    //     if($aplicouDesconto) {
    //         $request->session()->flash('mensagem-sucesso', 'Cupom aplicado com sucesso!');
    //     } else {
    //         $request->session()->flash('mensagem-falha', 'Cupom esgotado!');
    //     }
    //     return redirect()->route('carrinho.index');
    // }
}