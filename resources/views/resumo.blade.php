
{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesCarrinho.css') }}">
    
{{-- nome da página --}}
<title>Resumo do Pedido</title>

@section('resumo')
    <!-- Topo da página -->
    <div id="topo" class="p-3 mb-2 text-center text-white">Resumo do pedido</div>
    <!-- Fim do Topo da página-->

    <!-- Conteúdo da página -->
    <div class="container">
        <div class="row">
            <!-- Mensagem pedido finalizado -->
            <div class="mt-4 col-12 col-sm-12 col-md-12 col-lg-7">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading display-4">Seu pedido foi realizado com sucesso!</h4>
                    <p class="lead">Aêêê! Você conseguiu ler essa mensagem de alerta. Esse texto vai ter quer se
                        extender um pouquinho pra você conseguir ver como o espaçamento dentro de um alerta funciona.
                    </p>
                    <hr>
                    <p class="mb-0"><strong>Número do Pedido:</strong> FY48G7P</p>
                </div>
                <!-- Fim da mensagem pedido finalizado -->
                <!-- Progresso do pedido -->
                <div class="text-right mt-5">
                    <h4>Acompanhe seu pedido</h4>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 25%"
                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p class="text-left mt-2">Pagamento aprovado! ------ Em separação ------ Pedido enviado ------
                        Pedido entregue! </p>
                    <p class="lead mt-5 text-left"><strong>Previsão de entrega:</strong> 10/08/2020</p>
                </div>
            </div>
            <!-- Fim do progresso do pedido -->

            <!-- Resumo do pedido -->
            <div class="mt-4 col-12 col-sm-12 col-md-12 col-lg-5">
                <h2 class="m-0">O QUE VOCÊ PEDIU</h2>
                <br>
                <li class="media mb-4 border border-success p-3">
                    <img src="./img/produtos/creme-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h6 class="mb-1"><strong>Creme de rosto</strong></h6>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        <p><strong>Unidades:</strong> 2 | <strong>Valor:</strong> R$ 10,00</p>
                    </div>
                </li>
                <li class="media mb-4 border border-success p-3">
                    <img src="./img/produtos/sabonete-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h6 class="mb-1"><strong>Sabonete</strong></h6>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        <p><strong>Unidades:</strong> 2 | <strong>Valor:</strong> R$ 10,00</p>
                    </div>
                </li>
                <li class="media mb-4 border border-success p-3">
                    <img src="./img/produtos/sais-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
                        alt="...">
                    <div class="media-body">
                        <h6 class="mb-1"><strong>Sais de banho</strong></h6>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                        <p><strong>Unidades:</strong> 2 | <strong>Valor:</strong> R$ 10,00</p>
                    </div>
                </li>

                <button type="button" class="btn btn-lg" style="background-color: #54775e;"><a class="text-light"
                        href="index-logado.html">Voltar para página inicial</a></button>
            </div>
            <!-- Fim do resumo do pedido -->
        </div>
    </div>
    </div>
    </div>
@endsection

   


