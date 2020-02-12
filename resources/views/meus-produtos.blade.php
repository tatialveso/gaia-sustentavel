{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Minhas configurações</title>

@section('meus-produtos')
    <div class="titulo">
        <h5>Meus produtos</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Meus produtos</h1>
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <img src="#" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none">Nome do produto</a></h5>
                            <div class="btn-produto">
                                <a href="/meus-produtos/{id}" class="btn text-light">Editar</a>
                                <a href="/meus-produtos/delete/{id}" class="btn text-light" style="background-color: #8b0000;">Excluir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection