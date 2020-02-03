{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Gaia Sustentável</title>

@section('perfil')

    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/paginas/img-header.jpg" class="d-block w-100"
                        alt="Toalhas empilhadas, vidros, frutas e pregadores de madeira enfeitando uma mesa">
                </div>
            </div>
        </div>
    </div>

    <div class="titulo mt-3">
        <h5>Novidades de quem você segue</h5>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete vegano</a>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de metal</a>
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
        <h5>Sua lista de desejo</h5>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete vegano</a>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de metal</a>
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
        <h5>Visualizados anteriormente</h5>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete vegano</a>
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
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de metal</a>
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
@endsection