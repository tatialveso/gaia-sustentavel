{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

{{-- nome da página --}}
<title>Como funciona a Gaia</title>

{{-- separando o css particular da página --}}
@section('como-funciona-assets')
    <style>
        .corpo-texto {
            position: relative;
        }

        .tesq {
            position: relative;
            width: 500px;
            height: 150px;
            top: 10px;
            left: 15px;
        }

        .tdir {
            position: relative;
            width: 500px;
            left: 550px;
        }
    </style>
@endsection

@section('como-funciona')
    {{-- imagem de destaque da página --}}
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/como-funciona.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    {{-- conteúdo da página --}}
    <div class="container mt-5 corpo-texto">
        <h1 class="text-center">Como a Gaia funciona</h1>
        <div class="text-center mt-5">
            <h5><i class="material-icons align-middle">
                    perm_identity
                </i> Passo 1: Cadastro</h5>
            <p>Escolha se você deseja apenas comprar ou se quer vender produtos na Gaia.<br>
                Faça o cadastro completamento os espaços com seus dados pessoais e da sua loja e envie.<br>
                Pronto! Você está cadastrado na Gaia.</p>
        </div>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled">Escolha o seu tipo de cadastro:</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#cliente">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#vendedor">Vendedor</a>
            </li>
        </ul>
        <div class="text-left tesq" id="cliente">
            <h5><i class="material-icons align-middle">
                    search
                </i> Passo 2: Encontre o que deseja</h5>
            <p>Busque os produtos e lojas que deseja usando a barra de busca ou vá direto para a página de cada
                categoria e filtre de acordo com a sua vontade.</p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    done
                </i> Passo 3: Siga suas lojas favoritas</h5>
            <p>Encontrou uma loja que gosta muito e quer sempre saber quando ela terá novidades? Entre no perfil da loja
                e clique no botão de seguir. Pronto, toda vez que a loja cadastrar um produto novo você será notificado
                e aparecerá uma aba na sua página inicial com as novidades de quem você segue.</p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    favorite
                </i> Passo 4: Crie a sua lista de desejo</h5>
            <p>Favorite os seus produtos preferidos e/ou aqueles que deseja comprar futuramente. Todos eles ficam
                guardados para que você possa consultá-los mais tarde.</p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    shopping_cart
                </i> Passo 5: Faça a sua compra</h5>
            <p>Veja quais são as condições de compra de cada vendedor. Insira os dados do seu cartão ou imprima o
                boleto, cheque se os dados de envio estão corretos e confirme a compra. Acompanhe a sua compra nas suas
                configurações e só aguarde que já já a sua compra chega.</p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    star
                </i> Passo 6: Avalie o produto e o vendedor</h5>
            <p>Gostou muito de um produto e/ou de uma loja? Tem algum comentário a fazer sobre o produto? Avalie tanto o
                produto quanto a loja para que outras pessoas possam saber a sua opinião.</p>
        </div>
        <hr>
        <div class="text-left tesq" id="vendedor">
            <h5><i class="material-icons align-middle">
                    storefront
                </i> Passo 2: Crie a sua loja</h5>
            <p>Ao criar a conta, você possui um perfil de lojista onde seus clientes podem te seguir para ficarem por
                dentro das suas novidades. Atualize o nome da sua loja, insira uma foto de perfil e conte um pouco da
                história da sua marca.</p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    add_shopping_cart
                </i> Passo 3: Cadastre os seus produtos</h5>
            <p>Cadastre os produtos que você quer vender na sua loja com as informações necessárias. Pronto! A sua loja
                está completa.</p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    done_all
                </i> Passo 4: Acompanhe os pedidos</h5>
            <p>Quando alguém fizer uma compra, você será notificado e ficará armazenado na aba de "Pedidos" nas suas
                "Configurações". Acompanhe os pedidos e atualize se o pedido já foi enviado.</p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    shopping_cart
                </i> Passo 5: Compre o que deseja sem criar outra compra</h5>
            <p>Quem faz uma conta de vendedor também pode comprar produtos na Gaia. Quem sabe a sua loja não faz uma
                parceria com outra loja que você gosta? Você também pode adicionar produtos nos seus "Favoritos".</p>
        </div>
    </div> 
@endsection

