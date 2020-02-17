{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Minhas configurações</title>

@section('meu-produto-edit')
    <div class="titulo">
        <h5>Meus produtos</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Editar produto</h1>
            <form action="/meus-produtos/{id}" method="POST">
                @csrf
                @method('PATCH')
                <label for=""><b>Foto do produto</b></label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Escolher foto</label>
                </div>
                <div class="form-group">
                    <label for="" class="mt-3"><b>Nome do produto</b></label>
                    <input type="text" class="form-control" value="{{$product["name"]}}">
                </div>
                <div class="form-group">
                    <label for=""><b>Preço</b></label>
                    <input type="number" class="form-control" value="{{$product["price"]}}">
                </div>
                <div class="form-group">
                    <label><b>Descrição do produto</b></label>
                    <textarea class="form-control" name="description" value="{{$product["description"]}}"></textarea>
                </div>
                <div class="form-group">
                    <label><b>Composição do produto</b></label>
                    <textarea class="form-control" name="composition" value=""></textarea>
                </div>
                <label for=""><b>Frete</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" value="">
                    <label class="form-check-label" for="">
                        Frete grátis para todo o território
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" value="" id="frete">
                    <label class="form-check-label" for="">
                        Frete fixo para todo o território
                    </label>
                </div>
                <div class="form-group col-3"  id="frete-valor" style="display:none;">
                    <label for=""><b>Valor do frete</b></label>
                    <input type="number" class="form-control" placeholder="Insira o valor do frete">
                </div>
                <label for="" class="mt-3"><b>Produto indisponível</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" value="">
                    <label class="form-check-label" for="">
                      Produto indisponível
                    </label>
                </div>

                <button type="submit" class=" mt-4 mb-5 btn text-light" style="background-color: #54775e;">Atualizar produto</button>
            </form>
        </main>
    </div>
@endsection