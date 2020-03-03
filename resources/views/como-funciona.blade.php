@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

<title>Como funciona a Gaia</title>

@section('como-funciona-assets')
    <style>
        .imagem img {
            object-fit: cover;
            height: 400px;
        }
        
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

@section('institucionais')
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
            <p>Para navegar com mais tranquilidade e conforto, faça o cadastro, inserindo as informações necessárias.<br>
                Pronto! Agora você deu o primeiro passo em um novo começo da sua história, prepare-se <br>
                para encontrar novos produtos que mudarão a sua forma de pensar no consumo e nos seus hábitos.
            </p>
            <p>Agora você pode escolher se você deseja apenas comprar os produtos que os lojistas da Gaia oferece<br>
                ou se deseja criar a sua própria loja e se juntar a Gaia nessa transformação!</p>
        </div>
        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link disabled" style="color: black;">Escolha o seu tipo de cadastro:</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#54775e;" href="#cliente">Cliente</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color:#54775e;" href="#vendedor">Vendedor</a>
            </li>
        </ul>
        <div class="text-left tesq" id="cliente">
            <h5><i class="material-icons align-middle">
                    person
                </i> Passo 2: Finalize seu perfil
            </h5>
            <p>
                Assim que cadastrado, termine de preencher todos os campos necessários para o seu cadastro ser finalizado com sucesso.
                Inserindo as informações complementares na página de configurações, a sua navegação será mais tranquila, assim como
                no momento em que você for realizar alguma compra.
            </p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    search
                </i> Passo 3: Encontre o que deseja
            </h5>
            <p>
                Busque os produtos e lojas que deseja usando a barra de busca ou vá direto para a página de cada
                categoria e/ou subcategorias. A Gaia oferece os melhores produtos locais e naturais no que se
                trata do seu bem-estar e da sua casa.
            </p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    favorite
                </i> Passo 4: Saiba mais sobre as lojas
            </h5>
            <p>
                Nós não apenas vendemos produtos. Nós sabemos da importância de um produto bem-feito e feito com
                muito amor e carinho. Sabendo disso, criamos um espaço apenas para as lojas, onde você, cliente, pode
                entrar e saber mais de onde vem aquele produto que você se apaixonou, qual é a história de quem o faz.
                Dessa forma você estará mais seguro para realizar a sua compra.
            </p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    shopping_cart
                </i> Passo 5: Faça a sua compra
            </h5>
            <p>
                Insira os produtos desejados no carrinho e navegue sem preocupações. Quando estiver pronto para concluir
                a compra é só seguir as etapas, confirmar o local de entrega e os dados de pagamento. Pronto! Logo logo o
                seu pedido estará chegando na sua casa.
            </p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    star
                </i> Passo 6: Avalie o produto e o vendedor
            </h5>
            <p>
                Gostou muito de um produto e/ou de uma loja? Tem algum comentário a fazer sobre o produto? Avalie tanto o
                produto quanto a loja para que outras pessoas possam saber a sua opinião.
            </p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                error
                </i> Passo 7: Encontrou algo estranho? Denuncie!
            </h5>
            <p>
                Gaia funciona porque nós temos os melhores clientes e estamos sempre melhorando por eles.
                Isso mesmo, você faz a Gaia melhor! Por isso, se você encontrou um produto e/ou uma loja que viola a política
                do nosso site e vai contra o que acreditamos, entre na página de Contatos e denuncie, informando
                o nome do produto e a loja.
            </p>
        </div>
        <hr>
        <div class="text-left tesq" id="vendedor">
            <h5><i class="material-icons align-middle">
                    storefront
                </i> Passo 2: Crie a sua loja
            </h5>
            <p>
                Nas configurações, é possível clicar no botão para criar a sua própria loja.
                Para se tornar um vendedor insira as informações necessária e assim você terá um espaço exclusivo
                para monitorar as suas vendas e seus produtos.
            </p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    add_shopping_cart
                </i> Passo 3: Cadastre os seus produtos
            </h5>
            <p>
                Cadastre os produtos que você quer vender na sua loja com as informações necessárias. Em "Meus produtos"
                você poderá editar e excluir os produtos de acordo com sua demanda e vontade. Pronto! A sua loja
                está completa.
            </p>
        </div>
        <div class="text-left tesq">
            <h5><i class="material-icons align-middle">
                    done_all
                </i> Passo 4: Acompanhe os pedidos
            </h5>
            <p>
                Quando alguém fizer uma compra, você será notificado e o pedido ficará na página "Minhas vendas", onde
                poderá monitorar todo o seu percurso até ele ser enviado.
            </p>
        </div>
        <div class="text-left tdir">
            <h5><i class="material-icons align-middle">
                    shopping_cart
                </i> Passo 5: Compre o que deseja sem criar outra compra
            </h5>
            <p>
                Criar a sua loja e se tornar um vendedor aqui na Gaia não te impede de comprar produtos de outros vendedores.
                Pelo contrário! A Gaia incentiva que nossos vendedores conheça outros vendedores e incentivem o comércio local
                e artesanal. Quem sabe a sua loja não faz uma parceria com outra loja que você gosta?
            </p>
        </div>
    </div> 
@endsection

