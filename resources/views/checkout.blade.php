{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Checkout da compra</title>

@section('checkout')
    <div class="titulo">
        <h5>Endereço de entrega e forma de pagamento</h5>
    </div>

    <div class="container">
        <div class="row">
            <div class="mt-5 col-6">
                <h3 class="mb-3">Endereço de entrega</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" value="">
                    <label class="form-check-label">Usar endereço cadastrado</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="" value="">
                    <label class="form-check-label">Enviar em novo endereço</label>
                </div>

                <form class="mt-4" id="checkout-form">
                    <div class="form-group">
                        <label><b>Endereço</b></label>
                        <input type="text" class="form-control" name="endereco" placeholder="Digite o seu endereço residencial">
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label><b>Número</b></label>
                            <input type="text" class="form-control" name="numero" placeholder="Digite o número">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>Complemento</b></label>
                            <input type="text" class="form-control" name="complemento" placeholder="Ex: apto. 55">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><b>Bairro</b></label>
                            <input type="text" class="form-control" name="bairro" placeholder="Insira o bairro">
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
                </form>
            </div>

            <div class="mt-5 col-6">
                <h3 class="mb-3">Forma de pagamento</h3>
                <div class="btn-group" role="group">
                    <button type="button" class="btn text-light">Boleto</button>
                    <button type="button" class="btn text-light">Cartão de crédito</button>
                </div>
                <form class="mt-4">
                    <div class="form-group">
                        <label><b>Nome impresso no cartão</b></label>
                        <input type="text" class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label><b>Número do cartão</b></label>
                        <input type="text" class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label><b>Validade do cartão</b></label>
                        <input type="month" class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label><b>Código de Segurança</b></label>
                        <input type="number" class="form-control" name="">
                    </div>

                    <button type="submit" class="btn text-light" style="background-color: #54775e;">Finalizar a compra</button>
                </form>
            </div>
        </div>
    </div>
@endsection



