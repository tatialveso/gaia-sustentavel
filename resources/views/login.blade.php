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
                <h5>Faça o seu Login:</h5>
            </span>
        </div>

        <div class="d-flex flex-column justify-content-center align-items-center">
            <form>
                <label for="email">E-mail</label>
                <input style="width: 500px;" class="form-control mb-3" name="email" type="email" id="email"
                    placeholder="Digite seu E-mail" required>

                <label for="senha">Senha</label>
                <input style="width: 300px;" class="form-control mb-3" name="senha" type="password" id="senha"
                    placeholder="Digite sua Senha" required>
            </form>
        </div>

        <div class="btn-produto d-flex justify-content-around">
            <a href="./index-logado.html"><button type="button" class="btn text-light mt-5">Enviar</button></a>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <h5>Ainda não é cadastrado? <a class="align-self-center text-dark" style="text-decoration: none;"
                    href="./cadastro.html">Faça seu cadastro.</a></h5>
        </div>

    </div>
</body>

</html>