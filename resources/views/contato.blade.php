{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

@section('contato')
    {{-- imagem de destaque da página --}}
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/fale-conosco.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    {{-- conteúdo da página --}}
    <div class="container mt-5">
        <form>
            <h1 class="text-center mb-5">Fale com a Gaia</h1>
            <div class="form-group row">
                <div class="col">
                    <label>Primeiro nome</label>
                    <input type="text" class="form-control" placeholder="Insira seu primeiro nome" required>
                </div>
                <div class="col">
                    <label>Sobrenome</label>
                    <input type="text" class="form-control" placeholder="Insira seu sobrenome" required>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Endereço de e-mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com"
                    required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Assunto</label>
                <select class="form-control" id="exampleFormControlSelect1" required>
                    <option selected disabled>Selecione um assunto</option>
                    <option>Devolução ou troca</option>
                    <option>Problema com o frete</option>
                    <option>Reportar abuso</option>
                    <option>Sobre Vendas</option>
                    <option>Sobre compra</option>
                    <option>Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn text-light" style="background-color: #54775e;">Enviar mensagem</button>
        </form>
    </div>
@endsection