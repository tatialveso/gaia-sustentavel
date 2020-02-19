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
    <!-- forelse: para verificar se o carrinho não está vazio, se não estiver segue o código a seguir. -->

    @forelse($pedidos as $pedido)
    {{-- lista de produtos --}}
    <div class="container">


    <!-- Para exibir todos os produtos selecionados: -->

        @foreach($pedido->pedido_produtos as $pedido_produto)

        <div class="row border border-success mt-5" style="height: 200px;">
            <div class="col-3 mt-5">
                <img src="{{$pedido_produto->produto->imagem}}" class="img-thumbnail w-25" alt=""> <!-- Ver como serão inseridas as imagens dos produtos!!-->
            </div>
            <div class="col-5 mt-5">
                <h5>{{$pedido_produto->product->name}}</h5>   <!-- Verificar se esses nomes fazem referência ao campos das tabelas-->
                <p><a href="#">{{$pedido_produto->store->name}}</a></p> <!-- Nome da loja -->
            </div>
            <div class="col-2 mt-5">
                <h6>Unidades</h6> <!-- Ver como será feito a definição das quantidades -->
                <select class="form-control-sm">
                    <option selected value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
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
@endsection

    