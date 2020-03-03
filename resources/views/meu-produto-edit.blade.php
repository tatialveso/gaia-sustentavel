@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Configurações</title>

@section('meu-produto-edit')
    <div class="titulo">
        <h5>Meus produtos</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <h1>Editar produto</h1>
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <label for=""><b>Foto do produto</b></label>
                <div class="custom-file">
                    <input type="file" name="img_product" class="custom-file-input @error('img_product') is-invalid @enderror" id="customFile">
                    <label class="custom-file-label" for="customFile">Escolher foto</label>
                    <div class="invalid-feedback">{{$errors->first('img_product')}}</div>
                </div>
                <div class="form-group">
                    <label for="" class="mt-3"><b>Nome do produto</b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$products["name"]}}">
                    <div class="invalid-feedback">{{$errors->first('name')}}</div>
                </div>
                <div class="form-group">
                    <label for=""><b>Preço</b></label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" value="{{$products["price"]}}">
                    <div class="invalid-feedback">{{$errors->first('price')}}</div>
                </div>
                <div class="form-group">
                    <label><b>Descrição do produto</b></label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" value="{{$products["description"]}}">{{$products["description"]}}</textarea>
                    <div class="invalid-feedback">{{$errors->first('description')}}</div>
                </div>
                <div class="form-group">
                    <label><b>Composição do produto</b></label>
                    <textarea class="form-control @error('composition') is-invalid @enderror" name="composition" value="{{$products["composition"]}}">{{$products["composition"]}}</textarea>
                    <div class="invalid-feedback">{{$errors->first('composition')}}</div>
                </div>
                
                <label for="" class="mt-3"><b>Produto indisponível</b></label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" value="N">
                    <label class="form-check-label" for="">
                      Produto indisponível
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="active" value="S">
                    <label class="form-check-label" for="">
                      Produto disponível
                    </label>
                </div>

                <button type="submit" class="mt-4 mb-5 btn text-light" style="background-color: #54775e;">Atualizar produto</button>
            </form>
        </main>
    </div>
@endsection