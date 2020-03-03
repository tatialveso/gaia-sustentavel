@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal: Cosméticos</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($cosmeticos as $cosmetico)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="/img/produtos/{{$cosmetico['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$cosmetico['id']}}">{{$cosmetico['name']}}</a></h5>
                            <p class="card-text">R$ {{$cosmetico['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$cosmetico['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection    
    
    