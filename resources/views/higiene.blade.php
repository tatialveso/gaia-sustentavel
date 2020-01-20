<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaia Sustentável</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesCatalogo.css">
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

    <!-- inicio da nav // -->
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cabelos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Shampoo</a>
                            <a class="dropdown-item" href="#">Condicionador</a>
                            <a class="dropdown-item" href="#">Finalizador</a>
                            <a class="dropdown-item" href="#">Tratamento Capilar</a>
                            <a class="dropdown-item" href="#">Kits de tratamento</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Corpo e Banho
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Hidratante</a>
                            <a class="dropdown-item" href="#">Esfoliante</a>
                            <a class="dropdown-item" href="#">Óleo</a>
                            <a class="dropdown-item" href="#">Sabonete</a>
                            <a class="dropdown-item" href="#">Desodorante</a>
                            <a class="dropdown-item" href="#">Repelente</a>
                            <a class="dropdown-item" href="#">Máscara Argila</a>
                            <a class="dropdown-item" href="#">Sais de Banho</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Maquiagem
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Rosto</a>
                            <a class="dropdown-item" href="#">Olhos e Sombrancelha</a>
                            <a class="dropdown-item" href="#">Boca</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Homens
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Cabelo</a>
                            <a class="dropdown-item" href="#">Barba</a>
                            <a class="dropdown-item" href="#">Rosto</a>
                            <a class="dropdown-item" href="#">Corpo</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index3.html">Casa e Ambiente<span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <!-- fim da nav // -->

    <main>
        <div class="container mt-3">
            <div class="row">
                <!--inicio row 1.// -->
                <div class="col-lg-3">
                    <h5>Marcas</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Herbia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            LCS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Simple Organic
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Terra Flor
                        </label>
                    </div>
                    <br />
                    <h5>Faixa de preço</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            até R$ 49,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            R$ 50,00 até R$ 89,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            R$ 90,00 até R$ 149,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Acima de R$ 150,00
                        </label>
                    </div>

                </div><!-- col.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto2.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hidratante Capilar</h5>
                            <p class="card-text text-center">Água de coco</p>
                            <p class="card-text">R$ 65,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center" style="width: 16rem">
                        <img src="./img/produto3.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Leave In</h5>
                            <p class="card-text text-center">Hibiscos - LCS</p>
                            <p class="card-text">R$ 45,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center" style="width: 16rem">
                        <img src="./img/produto4.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Desodorante</h5>
                            <p class="card-text text-center">Stick</p>
                            <p class="card-text">R$ 35,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 1.// -->

            <div class="row row justify-content-end mt-3">
                <!--inicio row 2.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto6.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">BB Cream Natural</h5>
                            <p class="card-text text-center">Orgânico</p>
                            <p class="card-text">R$ 65,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto7.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Batom Cremoso</h5>
                            <p class="card-text text-center">Orgânico</p>
                            <p class="card-text">R$ 57,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto8.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Glitter Biodegradável</h5>
                            <p class="card-text text-center">1 grama</p>
                            <p class="card-text">R$ 10,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 2.// -->

            <div class="row row justify-content-end mt-3">
                <!--inicio row 3.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto10.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Homem pós barbal</h5>
                            <p class="card-text text-center">Orgânico - 100 gramas</p>
                            <p class="card-text">R$ 57,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto11.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Óleo Vegetal</h5>
                            <p class="card-text text-center">Amêndoas Doce - 50 ml</p>
                            <p class="card-text">R$ 27,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="./img/produto12.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Pomada Natural</h5>
                            <p class="card-text text-center">Inflamação da pele</p>
                            <p class="card-text">R$ 48,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 3.// -->



        </div><!-- container.// -->

    </main>

    <footer class="mt-5">
        <div class="container">
            <img src="./img/logo/gaia-verde.png" class="rounded float-left" alt="...">
            <ul class="bottom-menu mt-4">
                <li><strong>Gaia sustentável</strong></li>
                <li><a href="">Quem somos</a></li>
                <li><a href="">Como funciona</a></li>
                <li><a href="">Fale conosco</a></li>
            </ul>
        </div>
        <hr>
        <div class="container">
            <p class="m-0"><i class="material-icons">copyright</i> 2019. Todos os direitos reservados.</p>
            <ul>
                <li><a href=""><img src="./img/rede-social/icon-facebook.png"></a></li>
                <li><a href=""><img src="./img/rede-social/icon-instagram.png"></a></li>
                <li><a href=""><img src="./img/rede-social/icon-twitter.png"></a></li>
                <li><a href=""><img src="./img/rede-social/icon-rss.png"></a></li>
            </ul>
        </div>
    </footer>


</body>

</html>