{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Minhas configurações</title>

@section('configuracoes')
    <div class="titulo">
        <h5>Minhas configurações</h5>
    </div>

    <div class="pagina container">
        @include('aside-conta')

        <main>
            <form action="" method="POST">
                @csrf
                @method('PUT')
                <h1 class="mb-3">Dados pessoais</h1>
                <div class="form-group">
                    <label for="name"><b>Nome completo</b></label>
                    <input type="text" class="form-control" name="name" id="name"  value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for=""><b>Data de nascimento</b></label>
                    <input type="date" class="form-control" name="data_nascimento" value="{{$user->date_of_birth}}">
                </div>
                <div class="form-group">
                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" name="cpf" class="form-control" id="cpf" value="{{$user->cpf}}">
                </div>
                <!-- <div class="form-group">
                    <label for="phone"><b>Telefone</b></label>
                    <input type="text" name="phone" class="form-control" id="phone">
                </div> -->

                <h1 class="mb-3">Endereço</h1>
                <div class="form-group">
                    <label><b>Endereço</b></label>
                    <input type="text" class="form-control" name="endereco" placeholder="" value="{{$user->address}}">
                </div>
                <div class="form-row">
                    <div class="col-4 form-group">
                        <label><b>Número</b></label>
                        <input type="text" class="form-control" name="numero" placeholder="" value="{{$user->number}}">
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Complemento</b></label>
                        <input type="text" class="form-control" name="complemento" placeholder="" value="{{$user->complement}}">
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Bairro</b></label>
                        <input type="text" class="form-control" name="bairro" placeholder="" value="{{$user->neighbourhood}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 form-group">
                        <label><b>Cidade</b></label>
                        <input type="text" class="form-control" name="cidade" placeholder="" value="{{$user->city}}">
                    </div>
                    <div class="col-3 form-group">
                        <label><b>Estado</b></label>
                        <select class="form-control" name="uf_id">

                            @if (isset($userStoredUF))
                                <option value='{{$userStoredUF->id}}' selected>{{$userStoredUF->state}}</option>
                            @else
                                <option disabled selected>Selecione um UF</option>
                            @endif

                            @foreach($ufs as $uf)
                                <option value='{{$uf->id}}'>{{$uf->state}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <label><b>CEP</b></label>
                        <input type="text" class="form-control" name="cep" placeholder="" value="{{$user->cep}}">
                    </div>
                </div>
                
                <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
            </form>
        </main>
    </div>
@endsection