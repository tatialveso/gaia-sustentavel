{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">
    
{{-- nome da página --}}
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
                    <p class="mb-0"><strong>Número do Pedido: </strong>(número do pedido)</p>
                </div>
                <button type="button" class="btn" style="background-color: #54775e;"><a class="text-light"
                    href="/perfil/{id}">Ir para a página inicial</a></button>
    
                {{-- Progresso do pedido --}}
                {{-- <div class="text-right mt-5">
                    <h4>Acompanhe seu pedido</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 25%"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-left mt-2">Pagamento aprovado! ------ Em separação ------ Pedido enviado ------
                        Pedido entregue! </p>
                    <p class="lead mt-5 text-left"><strong>Previsão de entrega:</strong> 10/08/2020</p>
                </div> --}}
            </div>

            {{-- resumo do pedido --}}
            <div class="mt-4 col-5">
                <h2>Seu pedido</h2>
                <li class="media mb-4 border border-success p-3">
                    <img src=".#" class="mr-3 img-thumbnail img-fluid w-25" alt="">
                    <div class="media-body">
                        <h6 class="mb-1"><strong>(nome do produto)</strong></h6>
                        <p><strong>Unidades: </strong>(quantidade) | <strong>Valor: </strong>R$</p>
                    </div>
                </li>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

   


