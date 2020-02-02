{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


{{-- chamada do css --}}

<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesProduto.css') }}">


<div class="container">
    {{-- logo --}}
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
</div>


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
                        <img src="./img/paginas/incluir-produto.png" class="card-img-top img-incluir"
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
        <div class="btn-produto">
            <a href="#" class="mb-5 btn text-light">Cadastrar produto</a>    
        </div>
        

