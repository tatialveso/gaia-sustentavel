<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minha Conta</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesMinhaConta.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <li><a href=""><i class="material-icons">
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

    <nav class="border-top border-bottom mb-3">
        <ul class="nav container justify-content-around mt-3">
            <li class="nav-item">
                <a class="nav-link" href="index-logado.html" style="color: #54775e;">Página Inicial</a>
            </li>
        </ul>
    </nav>

    <div class="page container">
        <aside>
            <div>
                <h1>Minha Conta</h1>
                <ul>
                    <li><a class="accountmenu accountmenu-active" href="minhaconta-dados.html">Meus Dados</a></li>
                    <li><a class="accountmenu" href="minhaconta-seguranca.html">Segurança</a></li>
                    <li><a class="accountmenu" href="minhaconta-compras.html">Minhas Compras</a></li>
                    <li><a class="accountmenu" href="minhaconta-favoritos.html">Favoritos</a></li>
                </ul>
            </div>
        </aside>

        <main>
            <div>
                <form action="" method="POST">
                    <div>
                        <h3>Dados da Conta</h3>

                        <div class="line">
                            <label for="name">Nome Completo</label>
                            <input type="text" name="name" id="name" required />
                        </div>
                        <div class="line">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" required />
                        </div>
                        <div class="line">
                            <label for="phone">Telefone</label>
                            <input type="text" name="phone" id="phone" required />
                        </div>
                        <div class="line">
                            <label for="e-mail">E-mail</label>
                            <!-- <input type="email" name="email" id="email" required /> -->
                            <span id="email">carolegal@gmail.com</span>
                        </div>
                    </div>

                    <div class="address">
                        <h3 class="addresstitle">Endereço</h3>

                        <div class="line">
                            <label for="zipcode">CEP</label>
                            <input type="text" name="zipcode" id="zipcode" required />
                        </div>
                        <div class="line">
                            <label for="address">Endereço</label>
                            <input type="text" name="address" id="address" required />
                        </div>
                        <div class="line multi">
                            <div class="input-left">
                                <label for="number">número</label>
                                <input type="text" name="number" id="number" required />
                            </div>

                            <div class="input-right">
                                <label for="complement">complemento</label>
                                <input type="text" name="complement" id="complement" />
                            </div>
                        </div>
                        <div class="line">
                            <label for="bairro">Bairro</label>
                            <input type="text" name="bairro" id="bairro" required />
                        </div>
                        <div class="line">
                            <label for="state">Estado</label>
                            <select name="state">
                                <option>--Selecione--</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                        </div>
                        <div class="line">
                            <label for="city">Cidade</label>
                            <input type="text" name="city" id="city" required />
                        </div>
                        <div class="line">
                            <label for="reference">Referência</label>
                            <input type="text" name="reference" id="reference" />
                        </div>
                    </div>

                    <button class="btn btn2 my-2 my-sm-0 text-light" type="submit">Salvar</button>
                </form>
            </div>
        </main>
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