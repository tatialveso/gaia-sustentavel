@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal: Items pessoais</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($pessoais as $pessoal)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="/img/produtos/{{$pessoal['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$pessoal['id']}}">{{$pessoal['name']}}</a></h5>
                            <p class="card-text">R$ {{$pessoal['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$pessoal['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection    
    
    