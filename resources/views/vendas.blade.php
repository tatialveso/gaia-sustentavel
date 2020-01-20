<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesMinhaconta.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div class="container top-menu font-weight-bold mt-1">
        <ul>
            <li><a href=""><i class="material-icons">
                        favorite
                    </i></a></li>
            <li><a href=""><i class="material-icons">
                        shopping_basket
                    </i></a></li>
            <li><a href=""><i class="material-icons">
                        person
                    </i></a></li>
        </ul>
    </div>

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

    <nav class="border-top border-bottom mb-3">
        <ul class="nav container justify-content-around mt-3">
            <li class="nav-item">
                <a class="nav-link" href="index-logado.html" style="color: #54775e;">Página Inicial</a>
            </li>
        </ul>
    </nav>

    <div class="page container">
        <aside>
            <div>
                <h1>Minha Conta</h1>
                <ul>
                    <li><a class="accountmenu" href="minhaconta-dados.html">Meus Dados</a></li>
                    <li><a class="accountmenu" href="minhaconta-seguranca.html">Segurança</a></li>
                    <li><a class="accountmenu" href="minhaconta-compras.html">Minhas Compras</a></li>
                    <li><a class="accountmenu" href="minhaconta-favoritos.html">Favoritos</a></li>
                    <li><a class="accountmenu accountmenu-active" href="minhaconta-vendas.html">Minhas Vendas</a></li>
                    <li><a class="accountmenu" href="incluir-produto.html">Incluir Novo Produto</a></li>
                </ul>
            </div>
        </aside>

        <main>
            <h3>Minhas Vendas</h3>
            <div class="purchases">
                <ul>
                    <li class="purchase">
                        <span class="date-title">Data do pedido: </span>
                        <span class="date-value">13/11/2019</span>

                        <span class="purchase-id-title">Nº do pedido:</span>
                        <span class="purchase-id-value">786128</span>

                        <div class="item-details">
                            <img src="img/produto2.png" class="account-image" />
                            <span class="name">Desodorante</span>
                            <span class="price">R$35,00</span>
                            <span class="seller">Comprado por Caroline</a></span>
                        </div>

                        <button class="btn btn2 my-2 my-sm-0 text-light" type="submit">Ver detalhes</button>
                    </li>
                    <li class="purchase">
                        <span class="date-title">Data do pedido: </span>
                        <span class="date-value">10/11/2019</span>

                        <span class="purchase-id-title">Nº do pedido:</span>
                        <span class="purchase-id-value">786127</span>

                        <div class="item-details">
                            <img src="img/produto2.png" class="account-image" />
                            <span class="name">Desodorante</span>
                            <span class="price">R$35,00</span>
                            <span class="seller">Comprado por Angela</a></span>
                        </div>

                        <button class="btn btn2 my-2 my-sm-0 text-light" type="submit">Ver detalhes</button>
                    </li>
                </ul>
            </div>
        </main>
    </div>

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
</body>

</html>