{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

{{-- nome da página --}}
<title>Buscador de Produtos</title>

@section('busca')
    <div class="pagina container">
        {{-- chamada para os filtros --}}
        @include('aside-catalogo')
        <main>

        <form class="form-inline" method="post">
                {!! csrf_field() !!}    
                <input class="form-control mr-sm-2" type="search" id="busca" name="busca" placeholder="Digite a sua busca..." aria-label="Search">
                <button class="btn p-0" type="submit">
                    <i class="material-icons align-middle">
                        Buscar
                    </i>
                </button>
            </form>

        <div class="container mt-3">
        <div class="row">
            @foreach($produtos as $produto)
                <div class="col-lg-4 mt-3">
                    <div class="card">
                        <img src="/img/produtos/{{$produto['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$produto['id']}}">{{$produto['name']}}</a></h5>
                            <p class="card-text">R$ {{$produto['price']}}</p>
                            <div class="btn-produto d-flex justify-content-between">
                                <a href="/produto/{{$produto['id']}}" class="btn text-light">Comprar</a>
                                <a href="#"><i class="align-middle material-icons">
                                        favorite_border
                                </i></a>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach

                <div class="container mt-3">
        <div class="row">
            @foreach($lojas as $loja)
                <div class="col-lg-4 mt-3">
                    <div class="card">
                        <img src="/img/lojas/{{$loja['image']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/lojas/{{$loja['id']}}">{{$loja['name_store']}}</a></h5>
                            <div class="btn-loja d-flex justify-content-between">
                                <a href="#"><i class="align-middle material-icons">
                                        favorite_border
                                </i></a>
                            </div>
                        </div>
                    </div>
                </div>


            @endforeach
        </div>
    </div>



        </main>
    </div>
@endsection