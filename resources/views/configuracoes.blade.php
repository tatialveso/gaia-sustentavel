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
                <h1 class="mb-3">Dados pessoais</h1>
                <div class="form-group">
                    <label for="name"><b>Nome completo</b></label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                    <label for=""><b>Data de nascimento</b></label>
                    <input type="date" class="form-control" name="data_nascimento">
                </div>
                <div class="form-group">
                    <label for="cpf"><b>CPF</b></label>
                    <input type="text" name="cpf" class="form-control" id="cpf">
                </div>
                <div class="form-group">
                    <label for="phone"><b>Telefone</b></label>
                    <input type="text" name="phone" class="form-control" id="phone">
                </div>

                <h1 class="mb-3">Endereço</h1>
                <div class="form-group">
                    <label><b>Endereço</b></label>
                    <input type="text" class="form-control" name="endereco" placeholder="">
                </div>
                <div class="form-row">
                    <div class="col-4 form-group">
                        <label><b>Número</b></label>
                        <input type="text" class="form-control" name="numero" placeholder="">
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Complemento</b></label>
                        <input type="text" class="form-control" name="complemento" placeholder="">
                    </div>
                    <div class="col-4 form-group">
                        <label><b>Bairro</b></label>
                        <input type="text" class="form-control" name="complemento" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-6 form-group">
                        <label><b>Cidade</b></label>
                        <input type="text" class="form-control" name="cidade" placeholder="">
                    </div>
                    <div class="col-3 form-group">
                        <label><b>Estado</b></label>
                        <select class="form-control" name="uf_id">
                            <option disabled selected>Selecione um UF</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AM</option>
                            <option>AP</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>DF</option>
                            <option>ES</option>
                            <option>GO</option>
                            <option>MA</option>
                            <option>MG</option>
                            <option>MS</option>
                            <option>MT</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>PR</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>RS</option>
                            <option>SC</option>
                            <option>SE</option>
                            <option>SP</option>
                            <option>TO</option>
                        </select>
                    </div>
                    <div class="col-3 form-group">
                        <label><b>CEP</b></label>
                        <input type="text" class="form-control" name="cep" placeholder="">
                    </div>
                </div>
                
                <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
            </form>
        </main>
    </div>
@endsection