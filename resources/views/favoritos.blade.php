{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesMinhaConta.css')}}">

{{-- chamada do Gfonts --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('favoritos')
    <div class="page container">
        <aside>
            <div>
                <h1>Minha Conta</h1>
                <ul>
                    <li><a class="accountmenu" href="meusdados">Meus Dados</a></li>
                    <li><a class="accountmenu" href="seguranca">Segurança</a></li>
                    <li><a class="accountmenu accountmenu-active" href="favoritos">Favoritos</a></li>
                    <li><a class="accountmenu" href="historico-compras">Minhas Compras</a></li>
                    <li><a class="accountmenu" href="historico-vendas">Minhas Vendas</a></li>
                </ul>
            </div>
        </aside>

        <main>
            <h3>Meus Favoritos</h3>
            <div class="row">
                <div class="fav-item col-lg-6">
                    <div class="card text-center" style="width: 16rem">
                        <input type="checkbox" name="fav" value="1" id="fav1" class="fav-check">
                        <label for="fav1" class="fav-image-label">
                            <img src="./img/produto2.png" class="card-img-top account-image" alt="...">
                        </label>
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Desodorante</h5>
                            <p class="card-text text-center">Stick</p>
                            <p class="card-text">R$ 35,00</p>
                            <span class="topbar">
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite</i></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="fav-item col-lg-6">
                    <div class="card text-center" style="width: 16rem">
                        <input type="checkbox" name="fav" value="2" id="fav2" class="fav-check">
                        <label for="fav2" class="fav-image-label">
                            <img src="./img/produto4.png" class="card-img-top account-image" alt="...">
                        </label>
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hidratante Capilar</h5>
                            <p class="card-text text-center">Água de coco</p>
                            <p class="card-text">R$ 65,00</p>
                            <span class="topbar">
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite</i></a>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="break"></div>

                <div class="fav-item col-lg-6">
                    <div class="card text-center" style="width: 16rem">
                        <input type="checkbox" name="fav" value="2" id="fav2" class="fav-check">
                        <label for="fav2" class="fav-image-label">
                            <img src="./img/produto4.png" class="card-img-top account-image" alt="...">
                        </label>
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hidratante Capilar</h5>
                            <p class="card-text text-center">Água de coco</p>
                            <p class="card-text">R$ 65,00</p>
                            <span class="topbar">
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite</i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn2 my-2 my-sm-0 text-light" type="submit">Colocar no Carrinho</button>
        </main>
    </div>    
@endsection 