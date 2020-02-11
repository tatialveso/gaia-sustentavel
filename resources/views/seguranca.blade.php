{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

@section('seguranca')
    <div class="titulo">
        <h5>Configurações de segurança</h5>
    </div>
    <div class="pagina container">
        @include('aside-conta')

        <main>
            <div>
                <form action="" method="POST">
                    <div>
                        <h1 class="mb-3">Modificar senha</h1>

                        <div class="form-group">
                            <label><b>Senha atual</b></label>
                            <input type="text" name="senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><b>Nova senha</b></label>
                            <input type="text" name="senha" class="form-control">
                        </div>
                        <div class="form-group">
                            <label><b>Confirme sua senha</b></label>
                            <input type="text" name="senhaConfirma" class="form-control">
                        </div>
                    </div>

                    <div>
                        <h1 class="mb-3 mt-5">Modificar e-mail</h1>

                        <div class="form-group">
                            <label for="email"><b>Endereço de e-mail atual</b></label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="newemail"><b>Novo endereço de e-mail</b></label>
                            <input type="email" name="newemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirmemail"><b>Confirme o endereço de e-mail</b></label>
                            <input type="email" name="confirmemail" class="form-control">
                        </div>
                    </div>

                    <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar alterações</button>
                </form>
            </div>
        </main>
    </div>
@endsection 