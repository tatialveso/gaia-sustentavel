@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

<title>Gaia sustentável</title>

@section('carrinho')
    <div class="titulo">
        <h5>Cesta de Compras</h5>
    </div>
    
    <div class="container">
       
        @if(Session::has('mensagem-sucesso'))
            <div class="alert alert-success mt-3"> {{Session::get('mensagem-sucesso')}}</div>
        @endif
        @if(Session::has('mensagem-falha'))
            <div class="alert alert-success mt-3"> {{Session::get('mensagem-falha')}}</div>
        @endif
        
        @foreach($carrinhos['itens'] as $carrinho)
            <div class="row border border-success mt-5" style="height: 200px;">
                <div class="col-3 mt-5">
                    <img src="/img/produtos/{{$carrinho['produto']['img_product']}}" class="img-thumbnail w-25" alt="">
                </div>
                <div class="col-3 mt-5">
                    <h5><h5>{{$carrinho['produto']['name']}}</h5></h5> 
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
                        <input type="hidden" name="id" value="{{$carrinho['produto']['id'] }}">
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
                    <p class="lead"><b>R$ {{$carrinho_total}}</b></p>
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
            </div>
        </div>
    </div>
    @push('scripts')
        <script type="text/javascript" src="/js/carrinho.js"></script>
    @endpush

@endsection

    