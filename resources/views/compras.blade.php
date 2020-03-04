{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

{{-- título da página --}}
<title>Histórico de compras</title>

@section('compras')
    <div class="titulo">
        <h5>Histórico de Compras</h5>
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

    <div class="pagina container">
        {{-- chamada para incluir o aside --}}
        @include('aside-conta')
        
        <main>
            <h1>Minhas compras</h1>

            <div class="produto">
                @foreach ($pedidos as $pedido)
                    <div class="row">
                        <div class="col-6">
                            <span><b>Data do pedido:</b></span>
                            <span class="date-value"> </span>
                        </div>
                        <div class="col-6">
                            <span><b>Nº do pedido:</b></span>
                            <span class="purchase-id-value">{{ $pedido ['id']}}</span>
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-3">
                                <img src="img/produtos/{{ $pedido->produtos['img_product']}}" class="account-image">
                            </div>
                            <div class="col-9">
                                <p>{{ $pedido->produtos['name']}}<p>
                                <p>Vendido por <a class="loja" href="/loja/$pedido->produtos['store_id']"> a</a></p>
                                <p><b>R$</b> {{ $pedido->produtos['price']}}<p>
                            </div>
                        </div>
                @endforeach
            </div>
        </main>
    </div>
@endsection