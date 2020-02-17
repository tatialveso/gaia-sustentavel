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

    {{-- lista de produtos --}}
    <div class="container">
        <div class="row border border-success mt-5" style="height: 200px;">
            <div class="col-3 mt-5">
                <img src="#" class="img-thumbnail w-25" alt="">
            </div>
            <div class="col-5 mt-5">
                <h5>Nome do produto</h5>
                <p>Vendido por <a href="#">nome da loja</a></p>
            </div>
            <div class="col-2 mt-5">
                <h6>Unidades</h6>
                <select class="form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div class="col-2 mt-5">
                <h6>Valor</h6>
                <p>R$</p>
            </div>
        </div>
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
            <div class="p-5 col-6">
                <div class="text-right">
                    <h3>Resumo do pedido</h3>
                    <p class="lead"><b>Subtotal:</b> R$</p>
                    <p class="lead"><b>Frete:</b> R$</p>
                    <p class="lead"><b>Prazo de entrega:</b> </p>
                    <hr class="my-4">
                    <p class="lead"><b>Total da compra:</b> </p>
                    <div class="row">
                        <div class="col-6 mt-4">
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
@endsection

    