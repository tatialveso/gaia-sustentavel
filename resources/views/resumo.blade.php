@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">
    
<title>Resumo do Pedido</title>

@section('resumo')
    <div class="titulo">
        <h5>Resumo do pedido</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="mt-4 col-7">
                {{-- mensagem de pedido realizado --}}
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading display-4">Seu pedido foi realizado com sucesso!</h4>
                    <p class="lead">O seu pedido foi finalizado com sucesso!
                        A loja já foi notificada da sua compra, agora é só esperar ela chegar na sua casa!</p>
                    <hr>
                    <p class="mb-0"><strong>Número do Pedido: </strong></p>
                </div>
                <button type="button" class="btn" style="background-color: #54775e;"><a class="text-light"
                    href="/">Ir para a página inicial</a>
                </button>
            </div>

            {{-- resumo do pedido --}}
            <div class="mt-4 col-5">
                <h2>Seu pedido</h2>
                @foreach ($produtoPedidos as $produtoPedido)
                    <li class="media mb-4 border border-success p-3">
                        <img src="/img/produtos/{{$produtoPedido['img_product']}}" class="mr-3 img-thumbnail img-fluid w-25" alt="">
                        <div class="media-body">
                            <h6 class="mb-1"><strong>{{$produtoPedido['name']}}</strong></h6>
                            <p><strong>Unidades: </strong>(quantidade) | <strong>Valor: </strong>R$ {{$produtoPedido['price']}}</p>
                        </div>
                    </li>
                    
                @endforeach
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

   


