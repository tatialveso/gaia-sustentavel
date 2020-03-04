@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

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
                    <input class="form-check-input" type="radio" name="entrega" id="seu-endereco">
                    <label class="form-check-label">Usar endereço cadastrado</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="entrega" id="novo-endereco">
                    <label class="form-check-label">Enviar em novo endereço</label>
                </div>

                <form action="" method="POST" class="mt-4" id="checkout-form-preenchido">
                    @foreach ($users as $user)
                    <div class="form-group">
                        <label><b>Endereço</b></label>
                        <input type="text" class="form-control" name="address" value="{{$user['address']}}" disabled>
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label><b>Número</b></label>
                            <input type="text" class="form-control" name="number" value="{{$user['number']}}" disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>Complemento</b></label>
                            <input type="text" class="form-control" name="complement"  value="{{$user['complement']}}" disabled>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><b>Bairro</b></label>
                            <input type="text" class="form-control" name="neighbourhood"  value="{{$user['neighbourhood']}}" disabled>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label><b>Cidade</b></label>
                            <input type="text" class="form-control" name="city"  value="{{$user['city']}}" disabled>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>Estado</b></label>
                            <select class="form-control" name="uf_id" disabled>
                                <option disabled selected>Selecione um UF</option>
                                @foreach($ufs as $uf)
                                    <option value='{{$uf->id}}' @if($uf['id'] == $user['uf_id']) selected @endif>{{$uf['state']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>CEP</b></label>
                            <input type="text" class="form-control" name="cep"  value="{{$user['cep']}}" disabled>
                        </div>
                    </div> 
                    @endforeach
                </form>

                <form action="" method="POST" class="mt-4" id="checkout-form-novo">
                    @foreach ($users as $user)
                    <div class="form-group">
                        <label><b>Endereço</b></label>
                        <input type="text" class="form-control" name="address" placeholder="Insira um endereço de entrega">
                    </div>
                    <div class="form-row">
                        <div class="col-md-3 mb-3">
                            <label><b>Número</b></label>
                            <input type="text" class="form-control" name="number" placeholder="Insira o número da residência">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>Complemento</b></label>
                            <input type="text" class="form-control" name="complement"  placeholder="Insira um complemento">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label><b>Bairro</b></label>
                            <input type="text" class="form-control" name="neighbourhood"  placeholder="Insira o bairro">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label><b>Cidade</b></label>
                            <input type="text" class="form-control" name="city"  placeholder="Insira a cidade de entrega">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>Estado</b></label>
                            <select class="form-control" name="uf_id">
                                <option disabled selected>Selecione um UF</option>
                                @foreach($ufs as $uf)
                                    <option value='{{$uf->id}}'>{{$uf['state']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label><b>CEP</b></label>
                            <input type="text" class="form-control" name="cep"  placeholder="Insira um CEP válido">
                        </div>
                    </div> 
                    @endforeach
                </form>
            </div>

            <div class="mt-5 col-6">
                <h3 class="mb-3">Informação do cartão de crédito</h3>
                <form class="mt-4">
                    <div class="form-group">
                        <label><b>Nome impresso no cartão</b></label>
                        <input type="text" class="form-control" name="card-name" placeholder="Insira o nome da mesma forma que está no cartão">
                    </div>
                    <div class="form-group">
                        <label><b>Número do cartão</b></label>
                        <input type="text" class="form-control" name="card-number" placeholder="Insira o número do cartão">
                    </div>
                    <div class="form-group">
                        <label><b>Validade do cartão</b></label>
                        <input type="month" class="form-control" name="card-validate" placeholder="Insira a data de validade do cartão">
                    </div>
                    <div class="form-group">
                        <label><b>Código de Segurança</b></label>
                        <input type="number" class="form-control" name="card-code" placeholder="Insira o código de segurança do cartão">
                    </div>

                </form>
                <form action="/carrinho/concluir" method="POST">
                    @csrf
                    <button type="submit" class="btn text-light" style="background-color: #54775e;">Finalizar a compra</button>
                </form>
            </div>
        </div>
    </div>
@endsection



