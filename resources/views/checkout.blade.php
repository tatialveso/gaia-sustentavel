{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Gaia Sustentável</title>

@section('checkout')
    
    {{-- Topo --}}
    <div id="topo" class="p-3 mb-2 text-center text-white">Endereço de entrega e forma de pagamento</div>
    {{-- Fim do Topo --}}


    {{-- Formulários --}}
    <div class="container mt-5">
        <div class="row">
            <div class="pr-5 pt-5 col-12 col-sm-12 col-md-12 col-lg-6">
                <h2>Endereço de entrega</h2>
                <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                        value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Usar endereço cadastrado
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                        value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Enviar em novo endereço
                    </label>
                </div>
                <br>
                <form>
                    <div class="form">
                        <label for="inputEmail4">Nome completo</label>
                        <input type="email" class="form-control" id="inputEmail4">

                        <div class="form-group">
                            <label for="inputAddress">Endereço</label>
                            <input type="text" class="form-control" id="inputAddress">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputCity">Cidade</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Estado</label>
                                <select id="inputState" class="form-control">
                                    <option selected>São Paulo</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputZip">CEP</label>
                                <input type="text" class="form-control" id="inputZip">
                            </div>
                        </div>
                    </div>
            </div>

            <div class="pl-5 pt-5  col-12 col-sm-12 col-md-12 col-lg-6">
                <h2>Forma de pagamento</h2>
                <br>
                <div class="btn-group" role="group" aria-label="Button group with nested dropdown" id="botaoPag">
                    <button type="button" class="btn btn-secondary">Boleto</button>
                    <button type="button" class="btn btn-secondary">Pagamento online</button>

                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cartão de crédito
                        </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Visa</a>
                            <a class="dropdown-item" href="#">Mastercard</a>
                            <a class="dropdown-item" href="#">Elo</a>
                            <a class="dropdown-item" href="#">Dinners Club</a>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome impresso no cartão</label>
                        <input type="nomeCartao" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Número do cartão</label>
                        <input type="numeroCartao" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Validade (MM/AA)</label>
                        <input type="validadeCartao" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Código de Segurança</label>
                        <input type="segCartao" class="form-control" id="exampleFormControlInput1">
                    </div>

                </form>
                <button type="button" class="btn btn-lg" style="background-color: #54775e;"><a class="text-light" href="resumo-pedido.html">Finalizar a compra</a></button>
            </div>
        </div>
    </div>
    {{-- Fim de Formulários --}}
@endsection



