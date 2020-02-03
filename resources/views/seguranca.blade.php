{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesMinhaConta.css')}}">

{{-- chamada do Gfonts --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('seguranca')
    <div class="page container">
        <aside>
            <div>
                <h1>Minha Conta</h1>
                <ul>
                    <li><a class="accountmenu" href="meusdados">Meus Dados</a></li>
                    <li><a class="accountmenu accountmenu-active" href="seguranca">Segurança</a></li>
                    <li><a class="accountmenu" href="favoritos">Favoritos</a></li>
                    <li><a class="accountmenu" href="historico-compras">Minhas Compras</a></li>
                    <li><a class="accountmenu" href="historico-vendas">Minhas Vendas</a></li>
                </ul>
            </div>
        </aside>

        <main>
            <div>
                <form action="" method="POST">
                    <div>
                        <h3>Modificar senha</h3>

                        <div class="line">
                            <label for="password">Senha atual</label>
                            <input type="text" name="password" id="password" required />
                        </div>
                        <div class="line">
                            <label for="newpassword">Nova senha</label>
                            <input type="text" name="newpassword" id="newpassword" required />
                        </div>
                        <div class="line">
                            <label for="confirmpassword">Confirme sua senha</label>
                            <input type="text" name="confirmpassword" id="confirmpassword" required />
                        </div>
                    </div>

                    <div class="address">
                        <h3 class="addresstitle">Modificar E-mail</h3>

                        <div class="line">
                            <label for="email">E-mail atual</label>
                            <input type="email" name="email" id="email" required />
                        </div>
                        <div class="line">
                            <label for="newemail">Novo e-mail</label>
                            <input type="email" name="newemail" id="newemail" required />
                        </div>
                        <div class="line">
                            <label for="confirmemail">Confirme seu e-mail</label>
                            <input type="email" name="confirmemail" id="confirmemail" required />
                        </div>
                    </div>

                    <button class="btn btn2 my-2 my-sm-0 text-light" type="submit">Salvar</button>
                </form>
            </div>
        </main>
    </div>
@endsection 