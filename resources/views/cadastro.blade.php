<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .btn {
            background-color: #54775e;
        }
    </style>
    <title>Gaia Sustentável</title>
</head>

<body>
    <div class="container">
        <div class="d-flex flex-row justify-content-center col-lg-12 col-md-6 col-sm-3">
            <header>
                <a href="./index.html"><img src="./img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
            </header>
        </div>

        <div class="row d-flex justify-content-center" style="height: 100px;">
            <span class="align-self-center">
                <h5>Crie sua Conta</h5>
            </span>
        </div>

        <form>
            <label for="">Tipo de cadastro:</label>
            <div class=" container-fluid form-check form-check-inline">
                <input class="form-check-input ml-2" type="checkbox" id="check1" value="opcao1">
                <label class="form-check-label" for="check1">Cliente</label>
                <input class="form-check-input ml-2" type="checkbox" id="check2" value="opcao2">
                <label class="form-check-label" for="check2">Vendedor</label>
            </div>

            <label class="mt-3" for="nome">Nome da Loja</label>
            <input class="form-control mb-3 d-flex justify-content-center" name="nomeLoja" type="text" id="nomeLoja"
                placeholder="Digite o nome de sua Loja" required>

            <label for="nome">Nome</label>
            <input class="form-control mb-3 d-flex justify-content-center" name="nome" type="text" id="nome"
                placeholder="Digite seu nome" required>

            <label for="email">E-mail</label>
            <input class="form-control mb-3 d-flex justify-content-center" name="email" type="email" id="email"
                placeholder="Digite seu E-mail" required>

            <label for="senha">Senha</label>
            <input class="form-control mb-3 d-flex justify-content-center" name="senha" type="password" id="senha"
                placeholder="Digite sua Senha" required>

            <label for="senha">Confirmar a sua senha</label>
            <input class="form-control mb-3 d-flex justify-content-center" name="csenha" type="password" id="csenha"
                placeholder="Confirme sua senha" required>
        </form>


        <div class="btn-produto d-flex justify-content-around">
            <a href="./index-logado.html"><button type="button" class="btn text-light my-5">Cadastrar</button></a>
        </div>


        <div class="row d-flex justify-content-center">
            <h5>Já possui cadastro? <a href="./login.html" class="align-self-center text-dark"
                    style="text-decoration: none;">Faça o login.</a></h5>
        </div>

    </div>
</body>

</html>