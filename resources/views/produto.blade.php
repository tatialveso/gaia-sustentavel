@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">

<title>{{$product['name']}}</title>

@section('produto')
    <div class="container">
        <form method="POST" action="{{route('carrinho.adicionar')}}">
            @csrf
            <div class="row mt-5">
                <div class="col-6 mt-3">
                    <img src="/img/produtos/{{$product['img_product']}}" width="500px" alt="">
                </div>
            
                <div class="informacoes col-6">
                    <h4 class="my-5 text-center">{{$product['name']}}</h4>
                    <h6 class="mb-3"><a href="/loja/{{ $product['store_id'] }}">{{ $product->store->name_store }}</a></h6>
                    <h4 class="mt-5 mb-3">R$ {{$product['price']}}</h4>

                    <div class="dados d-flex justify-content-between mt-1">
                        <form action="" class="form-inline">
                            <div class="form-group">
                                <h6>Quantidade:</h6>
                                <input type="number" min=1 max=5 name="quantity" class="form-control ml-1">
                            </div>
                        </form>
                    </div>
                    
                    <input type="hidden" name="id" value="{{$product['id'] }}">
        
                    <div class="btn-produto d-flex justify-content-end"> 
                        <button class="btn my-5 text-light" type="submit">
                        Adicionar no carrinho</button>
                    </div>
                </div>
            </div>
        </form>
        
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-center">Descrição do produto</h4>
                <p class="mt-3 text-justify">{{ $product['description'] }}</p>

                <h4 class="text-center">Composição do produto</h4>
                <p class="text-justify">{{ $product['composition'] }}</p>
            </div>


            <div class="col-lg-6">
                <h4 class="text-center">Avaliações de clientes</h4>
                @foreach ($ratings as $rating)
                    <div class="mt-3">
                        <p><b>{{$rating['name']}}</b></p>
                        <p><b>{{$rating['rate']}}/10</b></p>
                        <p class="text-justify">{{$rating['description']}}</p>
                    </div>
                @endforeach
                @if ($user != null)
                <div class="btn-produto d-flex justify-content-around">
                    <button type="button" class="btn text-light my-5" id="avaliar-produto">Avaliar o produto</button>
                </div>

                <form action ="/produto/{{ $product['id'] }}" method="POST" id="form-produto">
                    @csrf
                    <div class="form-group">
                        <label><b>Título da avaliação</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Escreva um título para a sua avaliação">
                    </div>
                    <div class="form-group">
                        <label><b>Nota do produto</b></label>
                        <input type="number" name="rate" min=0 max=10 class="form-control" placeholder="De 0 a 10, qual nota você dá para o produto?">
                    </div>
                    <div class="form-group">
                        <label><b>Avaliação</b></label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Escreva com detalhes a sua experiência com o produto"></textarea>
                    </div>
                    <div class="btn-produto">
                        <button type="submit" class="btn text-light">Enviar avaliação</button>
                    </div>
                </form>
                @else
                <div class="btn-produto d-flex justify-content-around">
                    <a href="/avaliacao-blocked?id={{$product['id']}}" class="btn text-light my-5">Avaliar {{ $product['name']}}</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Produtos relacionados</h5>
    </div>

    <div class="container mt-3">
        <div class="row">
            @foreach ($relacionados as $relacionado)
                <div class="col-lg-4">
                    <div class="card">
                        <img src="/img/produtos/{{$relacionado['img_product']}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><a class="text-dark text-decoration-none" href="/produto/{{$relacionado['id']}}">{{$relacionado['name']}}</a></h5>
                            <p class="card-text">R$ {{$relacionado['price']}}</p>
                            <div class="btn-produto">
                                <a href="/produto/{{$relacionado['id']}}" class="btn text-light">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection