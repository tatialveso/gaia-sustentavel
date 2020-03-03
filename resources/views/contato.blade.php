@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

<title>Contate a Gaia</title>

@section('contato-assets')
    <style>
        .imagem img {
            object-fit: cover;
            height: 400px;
        }    
    </style>
@endsection

@section('institucionais')
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/fale-conosco.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5">
        <form action="/contato" method="POST">
            @csrf
            <h1 class="text-center mb-5">Fale com a Gaia</h1>
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            <div class="form-group row">
                <div class="col-6">
                    <label>Nome completo</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Insira o seu nome completo">
                    <div class="invalid-feedback">{{$errors->first('name')}}</div>
                </div>
                <div class="col-6">
                    <label for="">Endereço de e-mail</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Insira um e-mail válido">
                    <div class="invalid-feedback">{{$errors->first('email')}}</div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Assunto</label>
                <select class="form-control @error('topic_id') is-invalid @enderror" name="topic_id">
                    <option selected disabled>Selecione um assunto</option>
                    @foreach ($topics as $topic)
                        <option value="{{$topic->id}}">{{$topic->title}}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{$errors->first('topic_id')}}</div>
            </div>
            <div class="form-group">
                <label for="">Mensagem</label>
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="3" placeholder="Escreva com detalhes a sua mensagem"></textarea>
                <div class="invalid-feedback">{{$errors->first('message')}}</div>
            </div>

            <button type="submit" class="btn text-light" style="background-color: #54775e;">Enviar mensagem</button>
        </form>
    </div>
@endsection