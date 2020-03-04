@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

<title>Gaia Sustentável</title>

@section('index')
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/paginas/img-header.jpg" class="d-block w-100" alt="Toalhas empilhadas, vidros, frutas e pregadores de madeira enfeitando uma mesa">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/quem-somos.jpg" class="card-img-top" alt="Mãos segurando uma planta com terra">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/sobre">Quem somos</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/como-funciona.jpg" class="card-img-top" alt="Produtos de banho">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/como-funciona">Como funciona</a></h5>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/paginas/fale-conosco.jpg" class="card-img-top" alt="Mão escrevendo em um papel">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="/contato">Fale conosco</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="titulo mt-5">
        <h5>Novidades</h5>
    </div>
    <div class="container mt-3">
        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="/img/produtos/{{$produto['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$produto['id']}}">{{$produto['name']}}</a></h5>
                            <p class="card-text">R$ {{$produto['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$produto['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection