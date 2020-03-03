@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Casa e ambiente: Aromatizadores</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($aromatizadores as $aromatizado)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="/img/produtos/{{$aromatizado['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$aromatizado['id']}}">{{$aromatizado['name']}}</a></h5>
                            <p class="card-text">R$ {{$aromatizado['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$aromatizado['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection    
    
    