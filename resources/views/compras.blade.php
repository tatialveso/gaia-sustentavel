@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Gaia sustentável</title>

@section('compras')
    <div class="titulo">
        <h5>Histórico de Compras</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')
        
        <main>
            <h1>Minhas compras</h1>
            
            @if(Session::has('mensagem-sucesso'))
                <div class="alert alert-success"> {{Session::get('mensagem-sucesso')}}</div>
            @endif

            @if (sizeof($pedidos) == 0)
                <div class="col-6 mt-5 loja-vazia">
                    Ops! Você ainda não fez nenhuma compra.
                </div>
            @endif

            <div class="produto">
                @foreach ($pedidos as $pedido)
                    <div class="row border-top">
                        <div class="col-6 mb-2 mt-2">
                            <span><b>Nº do pedido:</b></span>
                            <span class="purchase-id-value">{{ $pedido ['id']}}</span>
                        </div>
                    </div>
                    @foreach ($pedido->produtos as $produto)
                        <div class="row mb-3">
                            <div class="col-3">
                                <img src="img/produtos/{{ $produto['img_product']}}" class="img-thumbnail">
                            </div>
                            <div class="col-9">
                                <p>
                                    <p>{{ $produto['name']}}</p>
                                    <p>Vendido por <a class="loja" href="/loja/$produto['store_id']"> {{$produto->store['name_store']}}</a></p>
                                    <p><b>R$</b> {{ $produto['price']}}</p>
                                </p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </main>
    </div>
@endsection