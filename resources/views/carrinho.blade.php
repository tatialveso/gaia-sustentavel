{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Carrinho de compras</title>

@section('carrinho')
    <div class="titulo">
        <h5>Cesta de Compras</h5>
    </div>

    <!-- Para verificar se existe alguma mensagem do flash() --> 

    @if(Session::has('mensagem-sucesso'))
        <div class=""> <!--Formatar a mensagem de sucesso--> 
            <strong> {{Session::get('mensagem-sucesso')}}</strong>
        </div>
    @endif
    @if(Session::has('mensagem-falha'))
        <div class=""> <!--Formatar a mensagem de falha--> 
            <strong> {{Session::get('mensagem-falha')}}</strong>
        </div>
    @endif


    <!-- forelse: para verificar se o carrinho não está vazio, se não estiver segue o código a seguir. -->

    @forelse($pedidos as $pedido)
    {{-- lista de produtos --}}
    <div class="container">


    <!-- Para exibir todos os produtos selecionados: -->

        @foreach($pedido->pedido_produtos as $pedido_produto)

        <div class="row border border-success mt-5" style="height: 200px;">
            <div class="col-3 mt-5">
                <img src="{{$pedido_produto->produto->imagem}}" class="img-thumbnail w-25" alt=""> 
            </div>
            <div class="col-5 mt-5">
                <h5>{{$pedido_produto->product->name}}</h5>   
                <p><a href="#">{{$pedido_produto->store->name}}</a></p> <!-- Nome da loja -->
            </div>
            <div class="col-2 mt-5">
                <h6>Unidades</h6> <!-- Ver como será feito a definição das quantidades -->
                    <a href="#" onclick="carrinhoRemoverProduto( {{$pedido->id}}, {{$pedido_produto->produto_id}},1)">
                        <i class="material-icons small">remove_cicle_outline</i>
                    </a>
                    <span class="" {{$pedido_produto->qtd}} </spam>
                    <a href="#" onclick="carrinhoAdicionarProduto( {{$pedido->id}}, {{$pedido_produto->produto_id}},1)">
                        <i class="material-icons small">add_cicle_outline</i>
                    </a>
                    <i class="material-icons small">add_cicle_outline</i>
            </div>  
            <a href="#" onclick="carrinhoAdicionarProduto( {{$pedido->id}}, {{$pedido_produto->produto_id}},1)" class="tooltipped" data-position="right" data-tooltipe="Retirar produto do carrinho"> Retirar produto</a>
                       
                <!-- <select class="form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select> -->
            </div>
            <div class="col-2 mt-5">
                <h6>Valor<h6> 
                <p>R${{number_format($pedido_produto->product->price, 2, ',', '.')}}</p>   <!-- Valor do produto -->
                <h6>Descontos</h6>
                <p>R${{number_format($pedido_produto->product->discount, 2, ',', '.')}}</p> <!-- desconto -->
            </div>
            
        </div>
    </div>

    <!-- Se o carrinho estiver vazio, cai aqui -->
    @empty
    <h5>Não há nenhum pedido no carrinho</h5>
    @endforelse

    {{-- Frete e valor --}}
    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <h5>Calcular Frete</h5>
                <input type="text" class="form-control" placeholder="Ex: 12345-678" style="width:50%">
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
                <button type="button" class="btn mt-3 text-light" style="background-color: #54775e;">Calcular</button>
            </div>



            <!-- Resumo do pedido -->
            <div class="p-5 col-6">
                <div class="text-right">
                    <h3>Resumo do pedido {{pedido->id}}</h3>
                    <!-- calcula o total do pedido sem o frete -->
                        @php
                            $total_pedido=0;
                            $total_produto=$pedido_produtos->prices - $pedido_produto->discounts;
                            $total_pedido+= $total_produto; <!-- Não está incluido o frete -->
                        @endphp

                    <p class="lead"><b>Subtotal: R${{number_format($total_produto, 2, ',', '.')}}</b> R$</p>
                    <p class="lead"><b>Frete:</b> R$</p><!--Definir!!-->
                    <p class="lead"><b>Prazo de entrega:</b> </p>   <!--Definir!!-->
                    <hr class="my-4">
                    <p class="lead"><b>Total da compra: R${{number_format($total_pedido, 2, ',', '.')}}</b> </p>
                    <div class="row">
                        <div class="col-6 mt-4"> <!-- Completar a url da página de busca de produto e confirmar o checkout -->
                            <button type="button" class="btn" style="background-color: #54775e;"><a class="text-light" href="{{ url('/') }}">Continuar comprando</a></button>
                        </div>
                        <div class="col-6 mt-4">
                            <button type="button" class="btn" style="background-color: #54775e;"><a class="text-light" href="/checkout">Finalizar compra</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form id="form-remover-produto" method="POST" action="{{route('carrinho/remover') }}">
        {{csrf_field()}}
        {{method-field('DELETE')}}
        <input type="hidden" name="pedido_id">
        <input type="hidden" name="produto_id">
        <input type="hidden" name="item">
    </form>
    <form id="form-adicionarr-produto" method="POST" action="{{route('carrinho/adicionar') }}">
        {{csrf_field()}}
        {{method-field('DELETE')}}
        <input type="hidden" name="id">
    </form>

    @push('scripts')
        <script type="text/javascript" src="/js/carrinho.js"></script>
    @endpush

@endsection

    