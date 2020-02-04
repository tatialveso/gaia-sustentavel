<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .titulo {
        height: 50px;
        background-color: #54775e;
        }
        .titulo h5 {
            margin: 0;
            padding: 0;
            color: white;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-incluir {
            width: 20%;
            display: flex;
            justify-content: center;
            align-self: center;
            opacity: 0.6;
        }

        .btn {
            background-color: #54775e;
        }
    </style>
    <title>Incluir novo produto</title>
</head>
<body>
    <header class="d-flex justify-content-center">
        <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
    </header>

    <div class="titulo">
        <h5>Passo 1: Fotos do produto</h5>
    </div>

    {{-- campo para adicionar fotos --}}
    <div class="container">
        <div class="jumbotron mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h5>Especificações</h5>
                    <ul>
                        <li><b>Tamanho:</b> mínimo de 580 pixels e máximo de 9000 pixels. Recomendamos 1000 pixels;</li>
                        <li><b>Formato:</b> só serão aceitados arquivos com extensão .jpg e .jpeg;</li>
                        <li><b>Peso:</b> as fotos poderão ter no máximo 10MB.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <img src="/img/paginas/incluir-produto.png" class="card-img-top img-incluir" alt="">
                        <div class="card-body">
                            <p class="text-center"><b>Capriche! As fotos são a primeira impressão que o cliente terá
                                    sobre seu produto!</b>
                            </p>
                            <form>
                                <div class="form-group">
                                    <input type="file" class="form-control-file">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                

            </div>
        </div>
    </div>

    <div class="titulo">
        <h5>Passo 2: Informações do Produto</h5>
    </div>
    
    <div class="container">
        <form action="" class="mt-4">
            <div class="form-row">
                <div class="col-6 form-group">
                    <label><b>Categoria</b></label>
                    <select class="form-control">
                        <option>Higiene Pessoal</option>
                        <option>Casa e ambiente</option>
                    </select>
                </div>
                <div class="col-6 form-group">
                    <label><b>Subcategoria</b></label>
                    <select class="form-control">
                        <option>Higiene Pessoal</option>
                        <option>Casa e ambiente</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-8 form-group">
                    <label><b>Nome do produto</b></label>
                    <input type="text" class="form-control" placeholder="Título do Produto">
                </div>
                <div class="col-4 form-group">
                    <label><b>Preço</b></label>
                    <input type="number" class="form-control" placeholder="Preço do produto">
                </div>
            </div>
            <div class="form-group">
                <label><b>Descrição do produto</b></label>
                <textarea class="form-control" placeholder="Escreva aqui as características do seu produto"></textarea>
            </div>
            <div class="form-group">
                <label><b>Composição do produto</b></label>
                <textarea class="form-control" placeholder="Escreva aqui a composição do seu produto"></textarea>
            </div>
            <div class="form-row">
                <div class="col-3 form-group">
                    <label><b>Largura do produto</b></label>
                    <input type="number" class="form-control" placeholder="Em centímetros">
                </div>
                <div class="col-3 form-group">
                    <label><b>Altura do produto</b></label>
                    <input type="number" class="form-control" placeholder="Em centímetros">
                </div>
                <div class="col-3 form-group">
                    <label><b>Comprimento do produto</b></label>
                    <input type="number" class="form-control" placeholder="Em centímetros">
                </div>
                <div class="col-3 form-group">
                    <label><b>Peso do produto</b></label>
                    <input type="number" class="form-control" placeholder="Em gramas">
                </div>
            </div>
            <div class="form-row">
                <div class="col-3 form-group">
                    <label><b>Estoque</b></label>
                    <input type="number" class="form-control" placeholder="Quantidade em estoque">
                </div>
                <div class="col-4 form-group">
                    <label><b>O seu produto é certificado?</b></label>
                    <select name="" id="" class="form-control">
                        <option value="">Selecione uma resposta</option>
                        <option value="">Sim</option>
                        <option value="">Não</option>
                    </select>
                </div>
                <div class="col-5 form-group">
                    <label><b>Que tipo de certificação?</b></label>
                    <input type="text" class="form-control" placeholder="Descreva a sua certificação">
                </div>
            </div>
        </form>
    </div>

    <div class="titulo mt-3">
        <h5>Passo 3: Opções de Frete</h5>
    </div>
    
    <div class="container">
        <form action="" class="mt-3">
            <div class="form-check">
                <input class="form-check-input" type="radio" value="">
                <label class="form-check-label">Frete a pagar</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="">
                <label class="form-check-label">Frete Grátis para todos os estados</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="">
                <label class="form-check-label">Frete Grátis por estados selecionados</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="">
                <label class="form-check-label">Frete Grátis acima de um valor mínimo</label>
            </div>
    
            <button type="submit" class=" mt-4 mb-5 btn text-light">Cadastrar novo produto</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
  

