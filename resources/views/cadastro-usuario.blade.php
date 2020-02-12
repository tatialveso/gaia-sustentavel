{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">
    
{{-- nome da página --}}
<title>Gaia sustentável: Cadastro</title>

<div class="container">
    {{-- logo --}}
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
    </div>

    {{-- campos para preenchimento --}}
            
        <form method="POST">
            {{-- cadastro de cliente --}}
            <div class="form-group">
                <label><b>Nome completo</b></label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome completo">
            </div>
            <div class="form-group">
                <label><b>Endereço de e-mail</b></label>
                <input type="email" class="form-control" name="email" placeholder="Digite o seu endereço de e-mail">
            </div>
            <div class="form-group">
                <label><b>Data de nascimento</b></label>
                <input type="date" class="form-control" name="data_nascimento" placeholder="">
            </div>
            <div class="form-group">
                <label><b>CPF</b></label>
                <input type="text" class="form-control" name="cpf" placeholder="Digite o número do seu CPF">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Endereço</b></label>
                    <input type="text" class="form-control" name="endereco" placeholder="Digite o seu endereço residencial">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Número</b></label>
                    <input type="text" class="form-control" name="numero" placeholder="Digite o número">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Complemento</b></label>
                    <input type="text" class="form-control" name="complemento" placeholder="Ex: apto. 55">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Cidade</b></label>
                    <input type="text" class="form-control" name="cidade" placeholder="Digite o nome da sua cidade">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Estado</b></label>
                    <select class="form-control" name="uf_id">
                        <option disabled selected>Selecione um UF</option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AM</option>
                        <option>AP</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MG</option>
                        <option>MS</option>
                        <option>MT</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>PR</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>RS</option>
                        <option>SC</option>
                        <option>SE</option>
                        <option>SP</option>
                        <option>TO</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>CEP</b></label>
                    <input type="text" class="form-control" name="cep" placeholder="CEP">
                </div>
            </div>
            <div class="form-group">
                <label><b>Senha</b></label>
                <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
            </div>
            <div class="form-group">
                <label><b>Confirme a sua senha</b></label>
                <input type="password" class="form-control" name="senha_confirmada" placeholder="Digite novamente a sua senha">
            </div>

            {{-- cadastro do vendedor --}}
            <label><b>Parte 1: Informações pessoais</b></label>
            <div class="form-group">
                <label><b>Nome completo</b></label>
                <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome completo">
            </div>
            <div class="form-group">
                <label><b>Endereço de e-mail</b></label>
                <input type="email" class="form-control" name="email" placeholder="Digite o seu endereço de e-mail">
            </div>
            <div class="form-group">
                <label><b>Data de nascimento</b></label>
                <input type="date" class="form-control" name="data_nascimento" placeholder="">
            </div>
            <div class="form-group">
                <label><b>CPF</b></label>
                <input type="text" class="form-control" name="cpf" placeholder="Digite o número do seu CPF">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Endereço</b></label>
                    <input type="text" class="form-control" name="endereco" placeholder="Digite o seu endereço residencial">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Número</b></label>
                    <input type="text" class="form-control" name="numero" placeholder="Digite o número">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Complemento</b></label>
                    <input type="text" class="form-control" name="complemento" placeholder="Ex: apto. 55">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Cidade</b></label>
                    <input type="text" class="form-control" name="cidade" placeholder="Digite o nome da sua cidade">
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>Estado</b></label>
                    <select class="form-control" name="uf_id">
                        <option disabled selected>Selecione um UF</option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AM</option>
                        <option>AP</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MG</option>
                        <option>MS</option>
                        <option>MT</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>PR</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>RS</option>
                        <option>SC</option>
                        <option>SE</option>
                        <option>SP</option>
                        <option>TO</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label><b>CEP</b></label>
                    <input type="text" class="form-control" name="cep" placeholder="CEP">
                </div>
            </div>
            <div class="form-group">
                <label><b>Senha</b></label>
                <input type="password" class="form-control" name="senha" placeholder="Digite a sua senha">
            </div>
            <div class="form-group">
                <label><b>Confirme a sua senha</b></label>
                <input type="password" class="form-control" name="senha_confirmada" placeholder="Digite novamente a sua senha">
            </div>

            {{-- informações sobre a loja --}}
            <label><b>Parte 2: Informações da loja</b></label>
            <div class="form-group">
                <label><b>Nome da Loja</b></label>
                <input type="text" class="form-control" name="nome_loja" placeholder="Digite o nome de sua loja">
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label><b>Cidade</b></label>
                    <input type="text" class="form-control" name="localizacao" placeholder="Digite o nome da sua cidade">
                </div>
                <div class="col-md-6 mb-3">
                    <label><b>Data de criação</b></label>
                    <input type="date" class="form-control" name="criacao" placeholder="Digite o ano em que a loja foi criada">
                </div>
            </div>
            <div class="form-group">
                <label><b>Categoria</b></label>
                <select class="form-control" name="categoria_id">
                    <option selected disabled>Selecione uma categoria</option>
                    <option>Higiene pessoal</option>
                    <option>Casa e ambiente</option>
                </select>
            </div>
            <div class="form-group">
                <label><b>Biografia</b></label>
                <textarea type="text" class="form-control" name="descricao" placeholder="Conte-nos um pouco da história da sua loja"></textarea>
            </div>
        </form>
    </div>

    {{-- botão de envio --}}
    <div class="btn-produto d-flex justify-content-around">
        <a href="/perfil"><button type="button" class="btn text-light">Cadastrar</button></a>
    </div>


    {{-- chamada para cadastro --}}
    <div class="d-flex justify-content-center mt-3">
        <h6>Já é cadastrado? <a class="text-dark" style="text-decoration:none" href="/login">Faça seu login.</a></h6>
    </div>

</div>