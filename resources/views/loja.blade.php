{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">
    
{{-- nome da página --}}
<title>(nome da loja)</title>

@section('loja')
    <div class="container">
        {{-- perfil da loja com informações da mesma --}}
        <div class="row">
            <div class="perfil col-6">
                {{-- foto de perfil --}}
                <div class="d-flex justify-content-around mt-4">
                    <img src="/img/lojas/" alt="">
                </div>
                {{-- nome da loja --}}
                <h4 class="mt-3 text-center">(Nome da loja)</h4>
                {{-- botão de seguir --}}
                <div class="mt-3 d-flex justify-content-center">
                    <button class="btn text-light">Seguir</button>
                </div>
            </div>

            <div class="col-6 mt-5">
                <h5>Biografia</h5>
                {{-- descrição da loja --}}
                <p></p>
                {{-- data de criação da loja --}}
                <p><b>Criado em</b> </p>
                {{-- localização da loja --}}
                <p><b>Localizado em</b> </p>
                {{-- avaliação da loja --}}
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
        <h5 class="text-center">Produtos de (nome da loja)</h5>
    </div>
    {{-- produtos na página da loja --}}
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    {{-- imagem do produto --}}
                    <img src="/img/produtos/" class="card-img-top" alt="">
                    <div class="card-body">
                        {{-- nome do produto --}}
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#"></a></h5>
                        {{-- preço do produto --}}
                        <p class="card-text"></p>
                        {{-- botões do card --}}
                        <div class="btn-produto d-flex justify-content-between">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href="#"><i class="align-middle material-icons">
                                    favorite_border
                            </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Avaliações de (nome da loja)</h5>
    </div>

    <div class="container">
        {{-- avaliação de cada usuário --}}
        <div class="mt-3">
            {{-- estrelas --}}
            <ul class="list-inline list-unstyled my-1">
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                <li class="list-inline-item"><i class="material-icons">star</i></a></li>
            </ul>
            {{-- título da avaliação --}}
            <p><b></b></p>
            {{-- texto de avaliação --}}
            <p class="text-justify"></p>
        </div>
        {{-- botão para avaliar a loja --}}
        <div class="btn-produto d-flex justify-content-around">
            <button type="button" class="btn text-light my-5" id="avaliar-loja">Avaliar a (nome da loja)</button>
        </div>

        {{-- lógica: quando o botão acima for clicado o formulário seguinte irá aparecer --}}
        <form action ="/loja/{id}" method="POST" id="form-loja">
            <div class="form-group">
            @csrf
                <label>Título da avaliação</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                {{-- lógica: o usuário ir clicando no tanto de estrelas que ele quiser
                    e enviar como nome. estrelas vazias quando clicadas ficam cheias --}}
                <ul class="avaliacao list-inline my-1">
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                    <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                </ul>
            </div>
            <div class="form-group">
                <label>Avaliação</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="btn-produto">
                <button type="submit" class="btn text-light">Enviar avaliação</button>
            </div>
        </form>
    </div>
@endsection