<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Como funciona</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/stylesIndex.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
</head>

<body>
    <div class="container top-menu font-weight-bold mt-1">
        <ul>
            <li><a href=""><i class="material-icons">
                        favorite
                    </i></a></li>
            <li><a href=""><i class="material-icons">
                        shopping_basket
                    </i></a></li>
            <li><a href="./login.html"><i class="material-icons">
                        person
                    </i></a></li>
        </ul>
    </div>

    <header>
        <nav class="container navbar navbar-light">
            <a class="navbar-brand p-0 m-0" href="index.html"><img src="./img/logo/gaia-branco.png"
                    alt="Logo de Gaia sustentável"></a>
            <form class="form-inline">
                <input class="form-control mr-sm-2" type="search" placeholder="Digite a sua busca..."
                    aria-label="Search">
                <button class="btn p-0" type="submit">
                    <i class="material-icons align-middle">
                        search
                    </i>
                </button>
            </form>
        </nav>
    </header>

    <nav class="border-top">
        <button>
            <i class="material-icons">
                menu
            </i>
        </button>
        <ul class="nav container justify-content-around">
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Higiene Pessoal
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Todos os produtos de Higiene Pessoal</a>
                    <a class="dropdown-item" href="#">Cabelo</a>
                    <a class="dropdown-item" href="#">Rosto</a>
                    <a class="dropdown-item" href="#">Cosméticos</a>
                    <a class="dropdown-item" href="#">Corpo e Banho</a>
                    <a class="dropdown-item" href="#">Itens Pessoais</a>
                </div>
            </div>

            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Casa e Ambiente
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Todos os produtos de Casa e Ambiente</a>
                    <a class="dropdown-item" href="#">Limpeza doméstica</a>
                    <a class="dropdown-item" href="#">Aromatizador</a>
                </div>
            </div>

            <button class="btn" type="button">
                Ofertas
            </button>
        </ul>
    </nav>

    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/como-funciona.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
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
    <footer class="mt-5">
        <div class="container">
            <div>
                <img src="./img/logo/gaia-verde.png" class="rounded float-left" alt="...">
                <ul class="bottom-menu mt-4">
                    <li><strong>Gaia sustentável</strong></li>
                    <li><a href="./quem-somos.html">Quem somos</a></li>
                    <li><a href="./como-funciona.html">Como funciona</a></li>
                    <li><a href="./fale-conosco.html">Fale conosco</a></li>
                </ul>
            </div>
            <hr>
            <div>
                <p class="m-0"><i class="material-icons">copyright</i> 2019. Todos os direitos reservados.</p>
                <ul>
                    <li><a href="https://facebook.com"><img src="./img/rede-social/icon-facebook.png"></a></li>
                    <li><a href="https://instagram.com"><img src="./img/rede-social/icon-instagram.png"></a></li>
                    <li><a href="https://twitter.com"><img src="./img/rede-social/icon-twitter.png"></a></li>
                    <li><a href=""><img src="./img/rede-social/icon-rss.png"></a></li>
                </ul>
            </div>
        </div>
    </footer>
</body>

</html>