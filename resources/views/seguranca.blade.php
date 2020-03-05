@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

<title>Configurações</title>

@section('seguranca')
    <div class="titulo">
        <h5>Configurações de segurança</h5>
    </div>
    <div class="pagina container">
        @include('aside-conta')

        <main>
            @if (session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif

            <div>
                <form action="seguranca/atualizar-senha" method="POST">
                    @csrf
                    <div>
                        <h1 class="mb-3">Modificar senha</h1>

                        <div class="form-group">
                            <label><b>Nova senha</b></label>
                            <input type="password" name="newpassword" class="form-control @error('newpassword') is-invalid @enderror">
                            <div class="invalid-feedback">{{$errors->first('newpassword')}}</div>
                        </div>
                        <div class="form-group">
                            <label><b>Confirme sua senha</b></label>
                            <input type="password" name="newpassword_confirmation" class="form-control @error('newpassword_confirmation') is-invalid @enderror">
                            <div class="invalid-feedback">{{$errors->first('newpassword_confirmation')}}</div>
                        </div>
                    </div>

                    <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar nova senha</button>
                </form>

                <form action="seguranca/atualizar-email" method="POST">
                    @csrf
                    <div>
                        <h1 class="mb-3 mt-5">Modificar e-mail</h1>

                        <div class="form-group">
                            <label for="email"><b>E-mail atual</b></label>
                            <input type="text" name="email" class="form-control" disabled value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="newemail"><b>Novo endereço de e-mail</b></label>
                            <input type="email" name="newemail" class="form-control @error('newemail') is-invalid @enderror">
                            <div class="invalid-feedback">{{$errors->first('newemail')}}</div>
                        </div>
                        <div class="form-group">
                            <label for="confirmemail"><b>Confirme o endereço de e-mail</b></label>
                            <input type="email" name="newemail_confirmation" class="form-control @error('newemail_confirmation') is-invalid @enderror">
                            <div class="invalid-feedback">{{$errors->first('newemail_confirmation')}}</div>
                        </div>
                    </div>

                    <button class="btn text-light" style="background-color: #54775e;" type="submit">Salvar novo e-mail</button>
                </form>
            </div>
        </main>
    </div>
@endsection 