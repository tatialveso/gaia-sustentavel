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
        <div class= "alert alert-secondary" role="alert"> 
            <strong> {{Session::get('mensagem-sucesso')}}</strong>
        </div>
    @endif
    @if(Session::has('mensagem-falha'))
        <div class= "alert alert-danger" role = "alert">
            <strong> {{Session::get('mensagem-falha')}}</strong>
        </div>
    @endif


    <!-- forelse: para verificar se o carrinho não está vazio, se não estiver segue o código a seguir. -->

    @forelse($pedidos as $pedido)
    
        @foreach($pedido->pedido_produtos as $pedido_produto) {{--Lista os produtos do pedido--}}
    {{-- lista de produtos --}}
    <div class="container">
    
        <div class="row border border-success mt-5" style="height: 200px;">
            <div class="col-3 mt-5">
                <img src="/img/produtos/{{$pedido_produto->product['img_product']}}" class="img-thumbnail w-25" alt=""> 
            </div>
            <div class="col-5 mt-5">
                <h5>{{$pedido_produto->product['name']}}</h5>   
                <p><a href="#">{{$pedido_produto->store['name']}}</a></p> <!-- Nome da loja -->
            </div>


            <div class="col-2 mt-5">
                <h6>Unidades</h6>
                    <a href="#" onclick="carrinhoRemoverProduto( {{$pedido->id}}, {{$pedido_produto->product_id}},1)">
                        <i class="material-icons small">remove_cicle_outline</i>  <!-- Remove 1 item -->
                    </a>
                    <span class=""> {{$pedido_produto->quantity}} </spam>
                    <a href="#" onclick="carrinhoAdicionarProduto( {{$pedido_produto->product_id}})">
                        <i class="material-icons small">add_cicle_outline</i> <!-- Adiciona 1 item --> 
                    </a>
            </div>  
            <button href="#" onclick="carrinhoRemoverProduto( {{$pedido->id}}, {{$pedido_produto->product_id}},0)"> Retirar produto</button>
             <!-- Remove todos os item daquele produto. -->    


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
                <p>R$ {{$pedido_produto->product['price']}}</p>
                <h6>Descontos</h6>
                <p>R$ {{$pedido_produto->product['discount']}}</p>
            </div>
        </div>
        @endforeach        
         <!-- Se o carrinho estiver vazio, cai aqui -->
    @empty
         <h5>Não há nenhum pedido no carrinho</h5>
    @endforelse
    </div>

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
                    <h3>Resumo do pedido {{$pedidos->id}}</h3>
            
                        @php
                            $total_pedido = 0;
                            $total_produto = ($pedido_produto->prices * $pedido->quantity) - $pedido_produto->discounts;
                            $total_pedido += $total_produto;
                        @endphp

                    <p class="lead"><b>Subtotal: R${{$total_produto}}</b> </p>
                    <p class="lead"><b>Frete:</b> R$</p><!--Definir!!-->
                    <p class="lead"><b>Prazo de entrega:</b> </p>   <!--Definir!!-->
                    <hr class="my-4">
                    <p class="lead"><b>Total da compra: R${{$total_pedido}}</b> </p>
                    <div class="row">
                        <div class="col-6 mt-4">
                            <button type="button" class="btn" style="background-color: #54775e"><a class="text-light" href="{{ url('/') }}">Continuar comprando</a></button>
                        <br/>
                        </div>


                    <!-- Cupom de desconto --> 

                    <form method = "POST" action = "{{ route('carrinho.desconto')}}">
                        {{csrf_field() }}
                        <input type = "hidden" name = "request_id" value = "{{$pedido->id}}">
                        <strong>Cupom de desconto: </strong>
                        <input type = "text" name = "cupom">
                        <button class="btn text-light" style="background-color: #54775e"> Validar</button>
                    </form>

                        <!-- Método de concluir compra -->
                        <form method="POST" action="{{route('carrinho.concluir') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="request_id" value="{{ $pedido->id}}">
                            <div class="col-6 mt-4">
                                <button type="button" class="btn text-light" style="background-color: #54775e;" href="/checkout">Finalizar compra</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form-remover-produto" method="POST" action="{{route('carrinho.remover') }}">
        {{csrf_field()}}
        @method('DELETE')
        <input type="hidden" name="request_id">
        <input type="hidden" name="product_id">
        <input type="hidden" name="item">
    </form>
    <form id="form-adicionar-produto" method="POST" action="{{route('carrinho.adicionar') }}">
        {{csrf_field()}}
        <input type="hidden" name="id">
    </form>

    @push('scripts')
        <script type="text/javascript" src="/js/carrinho.js"></script>
    @endpush

@endsection

    