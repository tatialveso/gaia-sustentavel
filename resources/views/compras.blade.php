{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesMinhaConta.css')}}">

{{-- chamada do Gfonts --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
@section('compras')
    <!-- Topo da página -->
    <div id="topo" class="p-3 mb-2 text-center text-white">Histórico de Compras</div>
    <!-- Fim do Topo da página-->

    <div class="page container">
        <aside>
            <div>
                <h1>Minha Conta</h1>
                <ul>
                    <li><a class="accountmenu" href="meusdados">Meus Dados</a></li>
                    <li><a class="accountmenu" href="seguranca">Segurança</a></li>
                    <li><a class="accountmenu" href="favoritos">Favoritos</a></li>
                    <li><a class="accountmenu accountmenu-active" href="historico-compras">Minhas Compras</a></li>
                    <li><a class="accountmenu" href="historico-vendas">Minhas Vendas</a></li>
                </ul>
            </div>
        </aside>

        <main>
            <h3>Minhas Compras</h3>
            <div class="purchases">
                <ul>
                    <li class="purchase">
                        <span class="date-title">Data do pedido: </span>
                        <span class="date-value">13/11/2019</span>

                        <span class="purchase-id-title">Nº do pedido:</span>
                        <span class="purchase-id-value">786128</span>

                        <div class="item-details">
                            <img src="img/produto2.png" class="account-image" />
                            <span class="name">Desodorante</span>
                            <span class="price">R$35,00</span>
                            <span>Vendido por <a class="seller" href="loja.html?vendedor=mundonatural">mundonatural</a></span>
                        </div>

                        <button class="btn my-2 my-sm-0 text-light" type="submit">Ver detalhes</button>
                    </li>
                    <li class="purchase">
                        <span class="date-title">Data do pedido: </span>
                        <span class="date-value">13/11/2019</span>

                        <span class="purchase-id-title">Nº do pedido:</span>
                        <span class="purchase-id-value">786128</span>

                        <div class="item-details">
                            <img src="img/produto2.png" class="account-image" />
                            <span class="name">Desodorante</span>
                            <span class="price">R$35,00</span>
                            <span>Vendido por <a class="seller" href="loja.html?vendedor=mundonatural">mundonatural</a></span>
                        </div>

                        <button class="btn my-2 my-sm-0 text-light" type="submit">Ver detalhes</button>
                    </li>
                </ul>
            </div>

        </main>
    </div>
@endsection