@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal: Corpo e banho</title>

@section ('catalogo')
    <div class="pagina container">
        <div class="row">
            @foreach ($banhos as $banho)
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="/img/produtos/{{$banho['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$banho['id']}}">{{$banho['name']}}</a></h5>
                            <p class="card-text">R$ {{$banho['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$banho['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection    
    
    