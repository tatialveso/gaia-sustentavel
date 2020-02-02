
{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    @section ('produto')

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="/img/produtos/produto1.jpg" width="500px" alt="">
            </div>
            <div class="informacoes col-lg-6">
                <h4 class="my-5 text-center">Sabonete natural</h4>
                <h6 class="mb-3"><a href="./perfil-vendedor.html">Saboneteria da Dona Fernanda</a></h6>

                <ul class="list-inline list-unstyled my-3">
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star
                        </i>
                    </li>
                    <li class="list-inline-item"><i class="material-icons">
                            star_border
                        </i>
                    </li>
                </ul>

                <h4 class="mt-5 mb-3">R$20.00</h4>
                <h6 class="d-inline my-5">Quantidade:</h6>
                <input type="number" min="1">
                <a class="mt-4 ml-2 align-middle" href=""><i class="material-icons">
                        favorite_border
                    </i></a>
                <form class="form-inline mt-3">
                    <h6 class="d-inline">Calcule o frete:</h6>
                    <input type="text" placeholder=" Insira o CEP">
                    <button class="btn ml-2 text-light" type="submit" style="background-color: #54775e;">OK</button>
                </form>
                <div class="btn-produto d-flex justify-content-end">
                    <button class="btn my-5" type="submit"><a class="text-light" href="cesta-compras.html">Adicionar no carrinho</a></button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="detalhe col-lg-6">
                <h4 class="text-center">Descrição do produto</h4>
                <p class="mt-3 text-justify">O Shampoo Castanha do Brasil da Arte dos Aromas limpa profundamente os fios
                    sem
                    agredir a fibra capilar, deixando os cabelos mais bonitos, saudáveis e fáceis de pentear. Possui
                    uma fórmula rica em castanha do Pará, um ingrediente altamente nutritivo que devolve o brilho e
                    maciez aos fios ressecados e danificados. Fonte de vitaminas e minerais, como selênio e zinco, o
                    shampoo castanha do Brasil promove uma hidratação capilar profunda e duradoura.</p>

                <h6>Características</h6>
                <ul>
                    <li>Produto natural e vegano;</li>
                    <li>Possui propriedades lubrificantes, nutritivas, hidratantes e antioxidantes;</li>
                    <li>Promove uma limpeza eficaz;</li>
                    <li>Recupera o brilho e a maciez dos fios ressecados e danificados.</li>
                </ul>

                <h6>Indicação</h6>
                <p class="text-justify">O Shampoo Castanha do Brasil da Arte dos Aromas é indicado para cabelos
                    ressecados, danificados ou
                    tingidos.
                </p>

                <h6>Ingredientes</h6>
                <p class="text-justify"><b>Composição: </b>Aqua (Water), Coco Glucoside, Lauryl Glucoside , Decyl
                    Glucoside , Cocamidopropyl
                    Betaine, Glycol Stearate, Xanthan Gum, Parfum, Panthenol , Bertholletia Excelsa Seed Oil ,
                    Sodium Benzoate , Citric Acid, Sorbic Acid , Alpha-Isomethyl Ionone, Amyl Cinnamal, Benzyl
                    Alcohol, Benzyl Benzoate,Benzyl Salicylate, Butylphenyl Methylpropional, Citral, Citronellol,
                    Geraniol, Hexyl Cinnamal, Hydroxyisohexyl 3-Cyclohexene Carboxaldelyde, Limonene, Linalool.
                </p>

                <p class="text-justify"><b>Fórmula livre de: </b> parabenos, sulfatos, formaldeídos, corantes
                    artificiais, derivados de
                    petróleo, substâncias geneticamente modificadas e substâncias irradiadas e produtos de origem
                    animal. Não é testado em animais.
                </p>
            </div>

            <div class="col-lg-6">
                <h4 class="text-center">Avaliações de clientes</h4>
                <div class="mt-3">
                    <ul class="list-inline list-unstyled my-1">
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                    </ul>
                    <p><b>Muito bom!!!</b></p>
                    <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                        industriais do
                        mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                        melhorada para evitar desperdício.
                    </p>
                </div>
                <div class="mt-5">
                    <ul class="list-inline list-unstyled my-1">
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
                    </ul>
                    <p><b>Muito bom!!!</b></p>
                    <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                        industriais do
                        mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                        melhorada para evitar desperdício.
                    </p>
                </div>
                <div class="mt-5">
                    <ul class="list-inline list-unstyled my-1">
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
                        <li class="list-inline-item"><i class="material-icons">star_border</i></a></li>
                    </ul>
                    <p><b>Muito bom!!!</b></p>
                    <p class="text-justify">O cheiro é ótimo e por ser natural não vem com toda a química dos shampoos
                        industriais do
                        mercado. A embalagem poderia ser maior para o preço e a forma de dispensar o produto poderia ser
                        melhorada para evitar desperdício.
                    </p>
                </div>
                <div class="btn-produto d-flex justify-content-around">
                    <button type="button" class="btn text-light my-5">Avaliar o produto</button>
                </div>

                <!-- formulário que quando o botão acima for clicado ele aparecerá embaixo -->
                <form>
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <ul class="avaliacao list-inline list-unstyled my-1">
                            <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                            <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                            <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                            <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                            <li class="list-inline-item"><a href=""><i class="material-icons">star_border</i></a></li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>Avaliação</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <div class="btn-produto">
                        <button type="submit" class="btn text-light">Enviar avaliação</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="titulo mt-5">
        <h5 class="text-center">Produtos relacionados</h5>
    </div>

    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto.jpg" class="card-img-top" alt="Escova de dente de bambu">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Escova de dente de
                                bambu</a></h5>
                        <p class="card-text">R$ 18.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto1.jpg" class="card-img-top" alt="Sabonetes veganos">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Sabonete
                                vegano</a>
                        </h5>
                        <p class="card-text">R$ 20.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <img src="/img/produtos/produto2.jpg" class="card-img-top" alt="Navalha de metal">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark text-decoration-none" href="#">Navalha de
                                metal</a>
                        </h5>
                        <p class="card-text">R$ 35.00</p>
                        <div class="btn-produto">
                            <a href="#" class="btn text-light">Comprar</a>
                            <a href=""><i class="material-icons">
                                    favorite_border
                                </i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection