@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal: Rosto</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($rostos as $rosto)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="/img/produtos/{{$rosto['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$rosto['id']}}">{{$rosto['name']}}</a></h5>
                            <p class="card-text">R$  {{$rosto['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$rosto['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection    
    
    