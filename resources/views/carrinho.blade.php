{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Gaia Sustentável</title>

@section('carrinho')
    {{-- Topo --}}
    <div class="titulo p-3 mb-2 text-center text-white">
        <h5>Cesta de Compras</h5>
    </div>
    {{-- Fim do Topo --}}

    {{-- Produtos --}}
    <div class="container border border-success mt-5 mb-5 p-4">
        <div class="row">
            <div class="m-4 col-12 col-sm-12 col-md-12 col-lg-8">
                <li class="media">
                    <img src="/img/produtos/creme-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h5 class="mt-4 mb-1">Creme de rosto</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        putate at turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                    </div>
                </li>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Unidades</h6>
                <select class="form-control form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Valor</h6>
                <p>R$ 10,00</p>
            </div>
        </div>
    </div>

    <div class="container border border-success mt-5 mb-5 p-4">
        <div class="row">
            <div class="m-4 col-12 col-sm-12 col-md-12 col-lg-8">
                <li class="media">
                    <img src="/img/produtos/sabonete-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h5 class="mt-4 mb-1">Creme de rosto</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        putate at turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                    </div>
                </li>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Unidades</h6>
                <select class="form-control form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Valor</h6>
                <p>R$ 10,00</p>
            </div>
        </div>
    </div>

    <div class="container border border-success mt-5 mb-5 p-4">
        <div class="row">
            <div class="m-4 col-12 col-sm-12 col-md-12 col-lg-8">
                <li class="media">
                    <img src="/img/produtos/sais-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h5 class="mt-4 mb-1">Creme de rosto</h5>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        putate at turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis
                        in faucibus.
                    </div>
                </li>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Unidades</h6>
                <select class="form-control form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="m-4 py-5 col-4 col-sm-4 col-md-4 col-lg-1">
                <h6>Valor</h6>
                <p>R$ 10,00</p>
            </div>
        </div>
    </div>
    {{-- Fim de Produtos --}}

    {{-- Frete e valor --}}
    <div class="container mt-5 mb-5 p-4 info-dados">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 p-5">
                <label for="validationCustom05">
                    <h5>Calcular Frete</h5>
                </label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Ex: 12345-678" required>
                <div class="invalid-feedback">
                    Please provide a valid zip.
                </div>
                <br>
                <button type="button" class="btn btn-sm text-light">Enviar</button>
            </div>
            <div class="p-5 col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="text-right">
                    <h1>Resumo do pedido</h1>
                    <p class="lead">Subtotal (3 produtos): R$ 510,00</p>
                    <p class="lead">Frete: R$ 13,85</p>
                    <p class="lead">Prazo de entrega: 2 dias úteis</p>
                    <hr class="my-4">
                    <p class="lead">TOTAL: R$ 523,85</p>
                    <button type="button" class="btn btn-lg"><a class="text-light" href="catalogo-casa.html">Continuar comprando</a></button>
                    <button type="button" class="btn btn-lg"><a class="text-light" href="dados-checkout.html">Finalizar a compra</a></button>
                </div>
            </div>
        </div>
    </div>
    {{-- Fim de Frete e valor --}}
@endsection

    