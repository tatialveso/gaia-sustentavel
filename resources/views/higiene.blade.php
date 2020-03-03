@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($produtos as $produto)
                <div class="col-4 mb-3">
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
    
    