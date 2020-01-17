<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saboneteria da Dona Fernanda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/stylesPerfilVendedor.css">
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
            <li><a href="./login.html"><i class="material-icons">
                        person
                    </i></a></li>
        </ul>
    </div>

    <header>
        <nav class="container navbar navbar-light">
            <a class="navbar-brand p-0 m-0" href="index.html"><img src="/img/logo/gaia-branco.png"
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

    <nav class="border-top border-bottom">
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

    <div class="container">
        <div class="row">
            <div class="perfil col-6">

                <div class="d-flex justify-content-around mt-4">
                    <img src="./img/paginas/foto-perfil.jpg" alt="">
                </div>

                <h4 class="mt-3 text-center">Saboneteria da Dona Fernanda</h4>
                <div class="mt-3 d-flex justify-content-center">
                    <button class="btn text-light">Seguir</button>
                </div>
            </div>

            <div class="col-6 mt-5">
                <h5>Biografia</h5>
                <p>A Saboneteria da Dona Fernanda está há 10 anos no mercado vendendo sabonetes naturais, veganos e
                    caseiros.</p>
                <p><b>Criado em</b> 2019</p>
                <p><b>Localizado em</b> São Paulo</p>
                <ul class="list-inline list-unstyled mt-4">
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star_border
                        </i>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Produtos da Saboneteria da Dona Fernanda</h5>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto.jpg" class="card-img-top" alt="Escova de dente de bambu">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Escova de dente de
                                bambu</a></h5>
                        <p class="card-text">R$ 18.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto1.jpg" class="card-img-top" alt="Sabonetes veganos">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete
                                vegano</a>
                        </h5>
                        <p class="card-text">R$ 20.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto2.jpg" class="card-img-top" alt="Navalha de metal">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de
                                metal</a>
                        </h5>
                        <p class="card-text">R$ 35.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto.jpg" class="card-img-top" alt="Escova de dente de bambu">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Escova de dente de
                                bambu</a></h5>
                        <p class="card-text">R$ 18.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="./img/produtos/produto1.jpg" class="card-img-top" alt="Sabonetes veganos">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete
                                vegano</a>
                        </h5>
                        <p class="card-text">R$ 20.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="./img/produtos/produto2.jpg" class="card-img-top" alt="Navalha de metal">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de
                                metal</a>
                        </h5>
                        <p class="card-text">R$ 35.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card">
                    <img src="./img/produtos/produto.jpg" class="card-img-top" alt="Escova de dente de bambu">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Escova de dente de
                                bambu</a></h5>
                        <p class="card-text">R$ 18.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="./img/produtos/produto1.jpg" class="card-img-top" alt="Sabonetes veganos">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete
                                vegano</a>
                        </h5>
                        <p class="card-text">R$ 20.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="./img/produtos/produto2.jpg" class="card-img-top" alt="Navalha de metal">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de
                                metal</a>
                        </h5>
                        <p class="card-text">R$ 35.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Avaliações da Saboneteria da Dona Fernanda</h5>
    </div>

    <div class="container">
        <div class="mt-3">
            <ul class="list-inline list-unstyled my-1">
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
            </ul>
            <p><b>Muito bom!!!</b></p>
            <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                industriais do
                mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                melhorada para evitar desperdício.
            </p>
        </div>
        <div class="mt-5">
            <ul class="list-inline list-unstyled my-1">
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
            </ul>
            <p><b>Muito bom!!!</b></p>
            <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                industriais do
                mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                melhorada para evitar desperdício.
            </p>
        </div>
        <div class="mt-5">
            <ul class="list-inline list-unstyled my-1">
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
            </ul>
            <p><b>Muito bom!!!</b></p>
            <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                industriais do
                mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                melhorada para evitar desperdício.
            </p>
        </div>
        <div class="btn-produto d-flex justify-content-around">
            <button type="button" class="btn text-light my-5">Avaliar a Saboneteria da Dona Fernanda</button>
        </div>

        <!-- formulário que quando o botão acima for clicado ele aparecerá embaixo -->
        <form>
            <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <ul class="avaliacao list-inline list-unstyled my-1">
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                </ul>
            </div>
            <div class="form-group">
                <label>Avaliação</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="btn-produto">
                <button type="submit" class="btn text-light">Enviar avaliação</button>
            </div>
        </form>
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
                    <li><a href="https://facebook.com"><img src="./img/rede-social/icon-facebook.png"></a>
                    </li>
                    <li><a href="https://instagram.com"><img src="./img/rede-social/icon-instagram.png"></a>
                    </li>
                    <li><a href="https://twitter.com"><img src="./img/rede-social/icon-twitter.png"></a>
                    </li>
                    <li><a href=""><img src="./img/rede-social/icon-rss.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>