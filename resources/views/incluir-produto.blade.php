<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaia Sustentável</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script defer src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script defer src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesProduto.css">
</head>

<body>

    <div class="container top-menu font-weight-bold mt-1">
        <ul>
            <li><a href="#"><i class="material-icons">
                        favorite
                    </i></a></li>
            <li><a href="#"><i class="material-icons">
                        shopping_basket
                    </i></a></li>
            <li><a href="login.html"><i class="material-icons">
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

    <div class="titulo">
        <span class="container d-block">
            <h5>Passo 1: Fotos do Produto</h5>
        </span>
    </div>

    <div class="container">
        <div class="jumbotron mt-5">
            <div class="row">
                <div class="col-md-6">
                    <div class="card incluir">
                        <img src="./img/pagina/incluir-produto.png" class="card-img-top img-incluir"
                            alt="Botão de selecionar imagens">
                        <div class="card-body">
                            <p class="text-center"><b>Capriche! As fotos são a primeira impressão que o cliente terá
                                    sobre seu produto!</b>
                            </p>
                            <p class="card-text text-center">Dica: utiliza os botões CTRL + SHIFT para selecionar
                                mais de uma imagem.
                            </p>
                            <form>
                                <div class="form-group">
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <h5>Especificações</h5>
                    <ul>
                        <li><b>Quantidade:</b> limite de 5 fotos por produto</li>
                        <li><b>Tamanho:</b> mínimo de 580 pixels e máximo de 9000 pixels. Recomendamos 1000 pixels;
                        </li>
                        <li><b>Formato:</b> só serão aceitados arquivos com extensão .jpg e/ou .jpeg;</li>
                        <li><b>Peso:</b> as fotos poderão ter no máximo 10MB.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <div class="titulo mb-5">
        <span class="container d-block">
            <h5>Passo 2: Informações do Produto</h5>
        </span>
    </div>

    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Categoria</label>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Higiene Pessoal</option>
                <option>Casa e ambiente</option>
            </select>
        </div>

        <h6>Especificações</h6>
        <form>
            <div class="form-row">
                <div class="col-7">
                    <input type="text" class="form-control" placeholder="Título do Produto">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Quantidade estoque">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Preço unitário">
                </div>
            </div><!-- fim form-row // -->
        </form>
        <br />
        <div class="mb-3">
            <label for="validationTextarea">Conte mais sobre seu produto</label>
            <textarea class="form-control" id="validationTextarea" placeholder="Descrição" required></textarea>
        </div>
        </br>
        <h6>Dimensões e peso dos produtos</h6>
        <form>
            <div class="form-row">
                <div class="col-4">
                    <input type="text" class="form-control" placeholder="Largura-cm">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Altura-cm">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Comprimento-cm">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Peso-gramas">
                </div>
            </div><!-- fim form-row // -->
        </form>
    </div>


    <div class="titulo mt-5 mb-5">
        <span class="container d-block">
            <h5>Passo 3: Opções de Frete</h5>
        </span>
    </div>

    <div class="container">
        <div class="form-check">
            <!-- frete // -->
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Frete a pagar</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">Frete Grátis para todos os estados</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">Frete Grátis por estados selecionados</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">Frete Grátis acima de um valor mínimo</label>
        </div>
        <br />
        <button type="submit" class="btn btn-cadastro  text-light mb-2">Cadastrar produto</button>
    </div>

</body>

</html>