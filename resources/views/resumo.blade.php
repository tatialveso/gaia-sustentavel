<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaia sustentável</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesCarrinho.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Top Menu -->
    <div class="container top-menu font-weight-bold mt-1">
        <ul>
            <li><a href=""><i class="material-icons">
                        favorite
                    </i></a></li>
            <li><a href=""><i class="material-icons">
                        shopping_basket
                    </i></a></li>
            <li><a href="./login.html"><i class="material-icons">
                        person
                    </i></a></li>
        </ul>
    </div>
    <!-- Fim do Top Menu -->

    <header>
        <nav class="container navbar navbar-light">
            <a class="navbar-brand p-0 m-0" href="index.html"><img src="./img/logo/gaia-branco.png"
                    alt="Logo de Gaia sustentável"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite a sua busca..."
                    aria-label="Search">
                <button class="btn p-0" type="submit">
                    <i class="material-icons align-middle">
                        search
                    </i>
                </button>
            </form>
        </nav>
    </header>

    <!-- Menu -->
    <nav class="border-top">
        <button>
            <i class="material-icons">
                menu
            </i>
        </button>
        <ul class="nav container justify-content-around">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Higiene Pessoal
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Todos os produtos de Higiene Pessoal</a>
                    <a class="dropdown-item" href="#">Cabelo</a>
                    <a class="dropdown-item" href="#">Rosto</a>
                    <a class="dropdown-item" href="#">Cosméticos</a>
                    <a class="dropdown-item" href="#">Corpo e Banho</a>
                    <a class="dropdown-item" href="#">Itens Pessoais</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Casa e Ambiente
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Todos os produtos de Casa e Ambiente</a>
                    <a class="dropdown-item" href="#">Limpeza doméstica</a>
                    <a class="dropdown-item" href="#">Aromatizador</a>
                </div>
            </div>

            <button class="btn" type="button">
                Ofertas
            </button>
        </ul>
    </nav>
    <!-- Fim do Menu -->

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

    <!-- Início do Footer -->
    <footer class="mt-5">
        <div class="container">
            <div>
                <img src="./img/logo/gaia-verde.png" class="rounded float-left" alt="...">
                <ul class="bottom-menu mt-4">
                    <li><strong>Gaia sustentável</strong></li>
                    <li><a href="./quem-somos.html">Quem somos</a></li>
                    <li><a href="./como-funciona.html">Como funciona</a></li>
                    <li><a href="./fale-conosco.html">Fale conosco</a></li>
                </ul>
            </div>
            <hr>
            <div>
                <p class="m-0"><i class="material-icons">copyright</i> 2019. Todos os direitos reservados.</p>
                <ul>
                    <li><a href="https://facebook.com"><img src="./img/rede-social/icon-facebook.png"></a></li>
                    <li><a href="https://instagram.com"><img src="./img/rede-social/icon-instagram.png"></a></li>
                    <li><a href="https://twitter.com"><img src="./img/rede-social/icon-twitter.png"></a></li>
                    <li><a href=""><img src="./img/rede-social/icon-rss.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- Fim do footer -->


</body>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

</html>