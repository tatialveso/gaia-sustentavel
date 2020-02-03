{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">
    
@section('vendas')
    <div class="titulo">
        <h5>Minhas vendas</h5>
    </div>
    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Minhas vendas</h1>
            <div class="produto">
                <div class="row">
                    <div class="col-6">
                        <span><b>Data do pedido:</b></span>
                        <span class="date-value">(inserir data de compra)</span>
                    </div>
                    <div class="col-6">
                        <span><b>Nº do pedido:</b></span>
                        <span class="purchase-id-value">(número do pedido)</span>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-3">
                        <img src="#" class="account-image">
                    </div>
                    <div class="col-9">
                        <p class="name m-0">(nome do produto)</p>
                        <p class="price m-0">(preço)</p>
                        <p>Vendido por <a class="loja" href="/loja/{id}">(nome da loja)</a></p>
        
                        <a class="btn mt-2 text-light" href="/">Ver detalhes</a>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection