{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">

<title>{{$product['name']}}</title>

@section('produto')

    <form class="container" method="POST" action="{{route('carrinho.adicionar')}}">
        <div class="row mt-5">
            <div class="col-6 mt-3">
                {{-- imagem do produto --}}
                <img src="img/produtos/{{$product['img_product']}}" width="500px" alt="">
            </div>
            {{-- informações --}}
            <div class="informacoes col-6">
                <h4 class="my-5 text-center">{{$product['name']}}</h4>
                <h6 class="mb-3"><a href="/loja/{{ $product['store_id'] }}">{{ $product->store->name_store }}</a></h6>

                {{-- estrelas de avaliação --}}
                <ul class="list-inline list-unstyled my-3">
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

                <h4 class="mt-5 mb-3">R$ {{$product['price']}}</h4>

                {{-- fav e quantidade --}}
                <div class="dados d-flex justify-content-between mt-1">
                    <form action="" class="form-inline">
                        <div class="form-group">
                            <h6>Quantidade:</h6>  <!-- ver como setar a quantidade --> 
                            <input type="number" min="1" name="quantity" class="form-control ml-1">
                        </div>
                    </form>
                    <a class="ml-5 align-middle" href="#"><i class="material-icons">favorite_border</i></a>
                </div>

                {{-- form frete --}}
                <form class="form-inline mt-3">
                    <div class="form-group">
                        <h6>Calcule frete:</h6> <!-- Ver como será feito o frete -->
                        <input type="text" class="form-control ml-1" placeholder="Insira o CEP">
                    </div>
                    <button class="btn ml-2 text-light" type="submit" style="background-color: #54775e;">OK</button>
                </form>




<!-- Lógica para inserir o produto no carrinho -->

        <div>
        {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$product['id'] }}">
        
                <div class="btn-produto d-flex justify-content-end"> 
                    <button class="btn my-5 text-light" type="submit">
                    Adicionar no carrinho</button>
                </div>
                
        </div>
            </div>
        </div>

        <div class="row">
            {{-- descrição do produto --}}
            <div class="col-lg-6">
                <h4 class="text-center">Descrição do produto</h4>
                <p class="mt-3 text-justify">{{ $product['description'] }}</p>

                <h4 class="text-center">Composição do produto</h4>
                <p class="text-justify">{{ $product['composition'] }}</p>
            </div>

            {{-- avaliações --}}
            <div class="col-lg-6">
                <h4 class="text-center">Avaliações de clientes</h4>
                <div class="mt-3">
                    <ul class="list-inline list-unstyled my-1">
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    </ul>
                    <p><b>(título da avaliação)</b></p>
                    <p class="text-justify">(avaliação)</p>
                </div>
                
                <div class="btn-produto d-flex justify-content-around">
                    <button type="button" class="btn text-light my-5" id="avaliar-produto">Avaliar o produto</button>
                </div>

                <!-- formulário que quando o botão acima for clicado ele aparecerá embaixo -->
                <form action ="/produto/{id}" method="POST" id="form-produto">
                    @csrf
                    <div class="form-group">
                        <label>Título da avaliação</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <ul class="avaliacao list-inline list-unstyled my-1">
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
                            <i class="material-icons">star</i>
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
        </div>
    </form>

    <div class="titulo mt-5">
        <h5 class="text-center">Produtos relacionados</h5>
    </div>

    {{-- produtos relacionados --}}
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
                                <a href=""><i class="material-icons">
                                        favorite_border
                                    </i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection