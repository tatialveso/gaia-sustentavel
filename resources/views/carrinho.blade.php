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

    <!-- Topo -->
    <div class="titulo p-3 mb-2 text-center text-white">
        <h5>Cesta de Compras</h5>
    </div>
    <!-- Fim do Topo -->

    <!-- Começo dos produtos -->
    <div class="container border border-success mt-5 mb-5 p-4">
        <div class="row">
            <div class="m-4 col-12 col-sm-12 col-md-12 col-lg-8">
                <li class="media">
                    <img src="./img/produtos/creme-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
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
                    <img src="./img/produtos/sabonete-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
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
                    <img src="./img/produtos/sais-cesta-compras.jpg" class="mr-3 img-thumbnail img-fluid w-25"
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
    <!-- Fim dos produtos -->

    <!-- Início Frete e valor -->
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
    <!-- Fim frete e valor -->

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