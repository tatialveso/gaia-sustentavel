{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

{{-- nome da página --}}
<title>Contate a Gaia</title>

@section('contato-assets')
    <style>
        .imagem img {
            object-fit: cover;
            height: 400px;
        }    
    </style>
@endsection

@section('contato')
    {{-- imagem de destaque da página --}}
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/fale-conosco.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    {{-- conteúdo da página --}}
    <div class="container mt-5">
        <form action="/contato" method="POST">
            @csrf
            <h1 class="text-center mb-5">Fale com a Gaia</h1>
            <div class="form-group row">
                <div class="col-6">
                    <label>Nome completo</label>
                    <input type="text" class="form-control" placeholder="Insira seu primeiro nome">
                </div>
                <div class="col-6">
                    <label for="">Endereço de e-mail</label>
                    <input type="email" class="form-control" placeholder="nome@exemplo.com">
                </div>
            </div>
            <div class="form-group">
                <label for="">Assunto</label>
                <select class="form-control">
                    <option selected disabled>Selecione um assunto</option>
                    <option>Reportar abuso</option>
                    <option>Dúvidas sobre a Gaia</option>
                    <option>Denunciar loja</option>
                    <option>Sobre Vendas</option>
                    <option>Sobre compra</option>
                    <option>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Mensagem</label>
                <textarea class="form-control" rows="3"></textarea>
            </div>

            <button type="submit" class="btn text-light" style="background-color: #54775e;">Enviar mensagem</button>
        </form>
    </div>
@endsection