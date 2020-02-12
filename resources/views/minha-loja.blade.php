{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Minhas configurações</title>

@section('minha-loja')
    <div class="titulo">
        <h5>Minha loja</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <form action="" method="POST">
                <h1 class="mb-3">Informações da loja</h1>
               
                <div class="form-group">
                    <label><b>Nome da Loja</b></label>
                    <input type="text" class="form-control" name="nome_loja" id="nomeloja">
                </div>
            
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Cidade</b></label>
                    <input type="text" class="form-control" name="localizacao">
                </div>
                <div class="col-md-6 mb-3">
                    <label><b>Data de criação</b></label>
                    <input type="date" class="form-control" name="criacao">
                </div>
            </div>
            <div class="form-group">
                <label><b>Categoria</b></label>
                <select class="form-control" name="categoria_id">
                    <option selected disabled>Selecione uma categoria</option>
                    <option>Higiene pessoal</option>
                    <option>Casa e ambiente</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Biografia</b></label>
                <textarea type="text" class="form-control" name="descricao"></textarea>
            </div>

                <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
            </form>
        </main>
    </div>
@endsection