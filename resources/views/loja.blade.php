{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">
    
{{-- nome da página --}}
<title>(nome da loja)</title>

@section('loja')
    <div class="container">
        <div class="row">
            <div class="perfil col-6">
                <div class="d-flex justify-content-around mt-4">
                    <img src="/img/lojas/{{ $loja['image']}}" alt="">
                </div>
                <h4 class="mt-3 text-center">{{ $loja['name_store']}}</h4>
                {{-- botão de seguir --}}
                {{-- <div class="mt-3 d-flex justify-content-center">
                    <button class="btn text-light">Seguir</button>
                </div> --}}
            </div>

            <div class="col-6 mt-5">
                <h5>Biografia</h5>
                {{-- descrição da loja --}}
                <p>{{ $loja['description']}}</p>
                {{-- data de criação da loja --}}
                <p><b>Criado em </b>{{ $loja['criacao']}}</p>
                {{-- localização da loja --}}
                <p><b>Localizado em </b>{{ $loja['location']}}</p>
                {{-- avaliação da loja --}}
                <p><b>Avaliação</b></p>
                {{-- <ul class="list-inline list-unstyled mt-4">
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
                </ul> --}}
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Produtos de {{ $loja['name_store']}}</h5>
    </div>
    
    <div class="container mt-3">
        <div class="row">
            @foreach ($products as $produto)
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
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Avaliações de {{ $loja['name_store']}}</h5>
    </div>

    <div class="container">
        @foreach ($ratings as $rating)
            <div class="mt-3">
                {{-- <ul class="list-inline list-unstyled my-1">
                    <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                </ul> --}}
                <p><b>{{$rating['name']}}</b></p>
                <p class="text-justify">{{$rating['description']}}</p>
            </div>
        @endforeach
        
        <div class="btn-produto d-flex justify-content-around">
            <button type="button" class="btn text-light my-5" id="avaliar-loja">Avaliar a {{ $loja['name_store']}}</button>
        </div>

        <form action ="/loja/{{ $loja['id'] }}" method="POST" id="form-loja">
            <div class="form-group">
            @csrf
                <label><b>Título da avaliação</b></label>
                <input type="text" name="name" class="form-control" placeholder="Escreva um título para a sua avaliação">
            </div>
            {{-- ao invés de usar estrelas, usamos números
            <div class="form-group">
                <label><b>Nota para a loja</b></label>
                <input type="number" name="rating" min=0 max=10 class="form-control" placeholder="De 0 a 10, qual nota você dá para a loja?">
            </div> --}}
            <div class="form-group">
                <label><b>Avaliação</b></label>
                <textarea class="form-control" name="description" rows="3" placeholder="Escreva com detalhes a sua experiência com a loja"></textarea>
            </div>
            <div class="btn-produto">
                <button type="submit" class="btn text-light">Enviar avaliação</button>
            </div>
        </form>
    </div>
@endsection