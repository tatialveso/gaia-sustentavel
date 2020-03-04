@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

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
    
    {{-- @forelse($pedidos as $pedido) --}}
    
    {{-- lista de produtos --}}
    <div class="container">
       
        @if(Session::has('mensagem-sucesso'))
            <div class= "alert alert-secondary mt-3" role="alert"> 
                <strong> {{Session::get('mensagem-sucesso')}}</strong>
            </div>
        @endif
        @if(Session::has('mensagem-falha'))
            <div class= "alert alert-danger mt-3" role="alert">
                <strong> {{Session::get('mensagem-falha')}}</strong>
            </div>
        @endif
        
        @foreach($carrinhos as $carrinho) {{--Lista os produtos do pedido--}}
            <div class="row border border-success mt-5" style="height: 200px;">
                <div class="col-3 mt-5">
                    <img src="/img/produtos/{{$carrinho->itens->produto->img_product}}" class="img-thumbnail w-25" alt=""> 
                </div>
                <div class="col-3 mt-5">
                    <h5>{{$carrinho->itens->produto->name}}</h5>   
                    {{-- <p><a href="#">{{$pedido_produto->store->'name']}}</a></p> <!-- Nome da loja --> --}}
                </div>

                <div class="col-2 mt-5">
                    <h6>Unidades</h6>
                    <input type="number" class="form-control col-5" min=1 max=5 name="quantity" value="{{$carrinho->itens->quantidade}}">
                    
                    {{-- <a href="#" onclick="carrinhoRemoverProduto( {{$pedido->id}}, {{$pedido_produto->product_id}},1)">
                        <i class="material-icons small">remove_cicle_outline</i>  <!-- Remove 1 item -->
                    </a>
                    <span class=""> {{$pedido_produto->quantity}} </span>
                    <a href="#" onclick="carrinhoAdicionarProduto( {{$pedido_produto->product_id}})">
                        <i class="material-icons small">add_cicle_outline</i> <!-- Adiciona 1 item --> 
                    </a> --}}
                </div>

                <div class="col-2 mt-5">
                    <h6>Valor<h6> 
                    <p>R$ {{$carrinho->itens->produto->price}}</p>
                </div>

                <div class="col-2 mt-5">
                    <form action="/carrinho/remover" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="carrinhoRemoverProduto( {{$carrinho->itens->id}}, {{$carrinho->itens->product_id}},0)">Retirar produto</button>
                    </form>
                </div>
            </div>
        {{-- @endforeach         --}}
        
        {{-- Se o carrinho estiver vazio, cai aqui --}}
        @empty
            <h5>Não há nenhum pedido no carrinho</h5>
        {{-- @endforelse --}}
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6 p-5">
                <div class="text-right">
                    <h3>Total da compra</h3>
            
                        {{-- @php
                            $total_pedido = 0;
                            $total_produto = ($carrinho->itens->produto->prices * $carrinho->itens->->quantidade) - $pedido_produto->discounts;
                            $total_pedido += $total_produto;
                        @endphp --}}

                    {{-- <p class="lead"><b>Subtotal:</b> R$ {{$total_produto}}</p> --}}
                    {{-- <p class="lead"><b>Prazo de entrega:</b> </p> --}}
                    <p class="lead"><b>R$ {{$carrinhos['total']}}</b></p>
                    <hr class="my-4">
                    <div class="row text-right">
                        <div class="col-6 mt-4">
                            <button type="button" class="btn" style="background-color: #54775e"><a class="text-light" href="/">Continuar comprando</a></button>
                        </div>
                        <div class="col-6 mt-4">
                            <button type="button" class="btn" style="background-color: #54775e"><a class="text-light" href="/checkout">Próximo passo</a></button>
                        </div>
                    </div>
                </div>

                <!-- Cupom de desconto --> 

                {{-- <form method = "POST" action = "{{ route('carrinho.desconto')}}">
                    {{csrf_field() }}
                    <input type = "hidden" name = "request_id" value = "{{$pedido->id}}">
                    <strong>Cupom de desconto: </strong>
                    <input type = "text" name = "cupom">
                    <button class="btn text-light" style="background-color: #54775e"> Validar</button>
                </form> --}}
            </div>
        </div>
    </div>

    {{-- <form id="form-remover-produto" method="POST" action="{{route('carrinho.remover') }}">
        {{csrf_field()}}
        @method('DELETE')
        <input type="hidden" name="request_id">
        <input type="hidden" name="product_id">
        <input type="hidden" name="item">
    </form>
    <form id="form-adicionar-produto" method="POST" action="{{route('carrinho.adicionar') }}">
        {{csrf_field()}}
        <input type="hidden" name="id">
    </form> --}}

    @push('scripts')
        <script type="text/javascript" src="/js/carrinho.js"></script>
    @endpush

@endsection

    