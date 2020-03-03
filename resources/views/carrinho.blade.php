@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

<title>Carrinho de compras</title>

@section('carrinho')
    <div class="titulo">
        <h5>Cesta de Compras</h5>
    </div>

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
        
        @foreach($carrinhos['itens'] as $carrinho)
            <div class="row border border-success mt-5" style="height: 200px;">
                <div class="col-3 mt-5">
                    <img src="/img/produtos/{{$carrinho['produto']['img_product']}}" class="img-thumbnail w-25" alt=""> 
                </div>
                <div class="col-3 mt-5">
                    <h5>{{$carrinho['produto']['name']}}</h5>   
                </div>

                <div class="col-2 mt-5">
                    <h6>Unidades</h6>
                    <input type="number" class="form-control col-5" min=1 max=5 name="quantity" value="{{$carrinho['quantidade']}}">
                </div>

                <div class="col-2 mt-5">
                    <h6>Valor<h6> 
                    <p>R$ {{$carrinho['produto']['price']}}</p>
                </div>

                <div class="col-2 mt-5">
                    <form action="/carrinho/remover" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Retirar produto</button>
                    </form>
                </div>
            </div>
        @endforeach        
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

    