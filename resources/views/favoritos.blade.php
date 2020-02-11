{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Favoritos</title>

@section('favoritos')
    <div class="titulo">
        <h5>Meus favoritos</h5>
    </div>
    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Meus favoritos</h1>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{id}">Nome do produto</a></h5>
                            <p class="card-text">preço do produto</p>
                            <div class="btn-produto">
                                <a href="/produto/{id}" class="btn text-light">Comprar</a>
                                <a href=""><i class="material-icons">
                                        favorite
                                </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>    
@endsection 