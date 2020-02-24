{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleCatalogo.css') }}">

<title>Higiene pessoal</title>

@section ('higiene')
    <div class="pagina container">
        @include('aside-catalogo')
        
        <main>
            <div class="row">
                @foreach ($cabelos as $cabelo)
                    <div class="col-4 mb-3">
                        <div class="card">
                            <img src="/img/produtos/{{$cabelo['img_product']}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$cabelo['id']}}">{{$cabelo['name']}}</a></h5>
                                <p class="card-text">{{$cabelo['price']}}</p>
                                <div class="btn-cabelo">
                                    <a href="/produto/{{$cabelo['id']}}" class="btn text-light">Comprar</a>
                                    <a href=""><i class="material-icons">
                                            favorite_border
                                    </i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </div>

@endsection    
    
    