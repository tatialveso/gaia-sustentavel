{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/stylesMinhaConta.css')}}">

{{-- chamada do Gfonts --}}
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

@section('configuracoes')

    
        <div class="page container">
            <aside>
                <div>
                    <h1>Minha Conta</h1>
                    <ul>
                        <li><a class="accountmenu accountmenu-active" href="meusdados">Meus Dados</a></li>
                        <li><a class="accountmenu" href="seguranca">Segurança</a></li>
                        <li><a class="accountmenu" href="favoritos">Favoritos</a></li>
                        <li><a class="accountmenu" href="historico-compras">Minhas Compras</a></li>
                        <li><a class="accountmenu" href="historico-vendas">Minhas Vendas</a></li>
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

        
    </body>

    </html>
@endsection