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

    <div class="titulo mt-1">
        <h5>Novidades das lojas que você segue</h5>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}"> </a></h5>
                        <p class="card-text"> </p>
                        <div class="btn-produto">
                            <a href="/produto/{id}" class="btn text-light">Comprar</a>
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
        <h5>Seus favoritos</h5>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}"> </a></h5>
                        <p class="card-text"> </p>
                        <div class="btn-produto">
                            <a href="/produto/{id}" class="btn text-light">Comprar</a>
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
                    <img src="" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}"> </a></h5>
                        <p class="card-text"> </p>
                        <div class="btn-produto">
                            <a href="/produto/{id}" class="btn text-light">Comprar</a>
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