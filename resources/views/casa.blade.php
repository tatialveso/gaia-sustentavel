{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

{{-- nome da página --}}
<title>Casa e ambiente</title>

@section('casa')
    <div class="pagina container">
        {{-- chamada para os filtros --}}
        @include('aside-catalogo')

        <main>
            <div class="row">
                {{-- card do produto --}}
                <div class="col-4">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}">Nome do produto</a></h5>
                            <p class="card-text">preço do produto</p>
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
        </main>
    </div>
@endsection