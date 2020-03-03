@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Configurações</title>

@section('configuracoes')
    <div class="titulo">
        <h5>Minhas configurações</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <form action="" method="POST">
                @csrf
                @method('PUT')
                <h1 class="mb-3">Dados pessoais</h1>
                <div class="form-group">
                    <label for="name"><b>Nome completo</b></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"  value="{{$user->name}}">
                    <div class="invalid-feedback">{{$errors->first('name')}}</div>
                </div>
                <div class="form-group">
                    <label for=""><b>Data de nascimento</b></label>
                    <input type="date" class="form-control @error('data_nascimento') is-invalid @enderror" name="data_nascimento" value="{{$user->date_of_birth}}">
                    <div class="invalid-feedback">{{$errors->first('data_nascimento')}}</div>
                </div>
                <div class="form-group">
                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" id="cpf" value="{{$user->cpf}}">
                    <div class="invalid-feedback">{{$errors->first('cpf')}}</div>
                </div>

                <h1 class="mb-3">Endereço</h1>
                <div class="form-group">
                    <label><b>Endereço</b></label>
                    <input type="text" class="form-control @error('endereco') is-invalid @enderror" name="endereco" placeholder="" value="{{$user->address}}">
                    <div class="invalid-feedback">{{$errors->first('endereco')}}</div>
                </div>
                <div class="form-row">
                    <div class="col-4 form-group">
                        <label><b>Número</b></label>
                        <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" placeholder="" value="{{$user->number}}">
                        <div class="invalid-feedback">{{$errors->first('numero')}}</div>
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Complemento</b></label>
                        <input type="text" class="form-control" name="complemento" placeholder="" value="{{$user->complement}}">
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Bairro</b></label>
                        <input type="text" class="form-control @error('bairro') is-invalid @enderror" name="bairro" placeholder="" value="{{$user->neighbourhood}}">
                        <div class="invalid-feedback">{{$errors->first('bairro')}}</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 form-group">
                        <label><b>Cidade</b></label>
                        <input type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" placeholder="" value="{{$user->city}}">
                        <div class="invalid-feedback">{{$errors->first('cidade')}}</div>
                    </div>
                    <div class="col-3 form-group">
                        <label><b>Estado</b></label>
                        <select class="form-control @error('uf_id') is-invalid @enderror" name="uf_id">

                            @if (isset($userStoredUF))
                                <option value='{{$userStoredUF->id}}' selected>{{$userStoredUF->state}}</option>
                            @else
                                <option disabled selected>Selecione um UF</option>
                            @endif

                            @foreach($ufs as $uf)
                                <option value='{{$uf->id}}'>{{$uf->state}}</option>
                            @endforeach

                        </select>
                        <div class="invalid-feedback">{{$errors->first('uf_id')}}</div>
                    </div>
                    <div class="col-3 form-group">
                        <label><b>CEP</b></label>
                        <input type="text" class="form-control @error('cep') is-invalid @enderror" name="cep" placeholder="" value="{{$user->cep}}">
                        <div class="invalid-feedback">{{$errors->first('cep')}}</div>
                    </div>
                </div>
                
                <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
            </form>
        </main>
    </div>
@endsection