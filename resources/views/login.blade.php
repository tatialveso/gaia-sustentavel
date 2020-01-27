{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

{{-- nome da página --}}
<title>Gaia sustentável: Login</title>

<div class="container">
    {{-- logo --}}
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
    </div>

    {{-- campos para preenchimento --}}
    <div class="mb-3 d-flex justify-content-center">
        <h5>Faça o seu login:</h5>
    </div>
    <div class="d-flex justify-content-center">
        <form method="POST">
            <div class="form-group">
                <label><b>Endereço de e-mail</b></label>
                <input type="email" class="form-control" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <label><b>Senha</b></label>
                <input style="width: 400px;" class="form-control" name="senha" type="password" placeholder="Digite sua senha">
            </div>
        </form>
    </div>

    {{-- botão de envio --}}
    <div class="btn-produto d-flex justify-content-around">
        <a href="/perfil"><button type="button" class="btn text-light">Enviar</button></a>
    </div>

    {{-- chamada para cadastro --}}
    <div class="d-flex justify-content-center mt-3">
        <h6>Ainda não é cadastrado? <a class="text-dark" style="text-decoration:none" href="/cadastro">Faça seu cadastro.</a></h6>
    </div>
</div>