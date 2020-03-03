@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Configurações</title>

@section('minha-loja')
    <div class="titulo">
        <h5>Minha loja</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <h1 class="mb-3">Informações da loja</h1>
               
                <div class="form-group">
                    <label><b>Nome da Loja</b></label>
                    <input type="text" class="form-control @error('name_store') is-invalid @enderror" name="name_store" value="{{ $loja['name_store']}}">
                    <div class="invalid-feedback">{{$errors->first('name_store')}}</div>
                </div>
            
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Cidade</b></label>
                    <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $loja['location']}}">
                    <div class="invalid-feedback">{{$errors->first('location')}}</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label><b>Data em que a loja foi fundada</b></label>
                    <input type="date" class="form-control @error('criacao') is-invalid @enderror" name="criacao" value="{{ $loja['criacao']}}">
                    <div class="invalid-feedback">{{$errors->first('criacao')}}</div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Categoria</b></label>
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ $loja['category_id']}}">
                    <option selected disabled>Selecione uma categoria</option>
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}' @if($category['id'] == $loja['category_id']) selected @endif>{{ $category['name'] }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{$errors->first('category_id')}}</div>
            </div>
            <div class="form-group">
                <label for=""><b>Carregar imagem da loja</b></label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="customFile" value="{{ $loja['image']}}">
                    <label class="custom-file-label" for="customFile">Escolha uma imagem</label>
                    <div class="invalid-feedback">{{$errors->first('image')}}</div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Biografia</b></label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $loja['description']}}">{{ $loja['description']}}</textarea>
                <div class="invalid-feedback">{{$errors->first('description')}}</div>
            </div>

                <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
            </form>

            <div class="d-flex justify-content-end">
                <form action="/deletar-loja" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Excluir loja">
                </form>
            </div>
        </main>
    </div>
@endsection