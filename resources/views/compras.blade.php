{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleConfiguracoes.css')}}">

{{-- título da página --}}
<title>Histórico de compras</title>

@section('compras')
    <div class="titulo">
        <h5>Histórico de Compras</h5>
    </div>

     <!-- Para verificar se existe alguma mensagem do flash() --> 

     @if(Session::has('mensagem-sucesso'))
        <div class=""> <!--Formatar a mensagem de sucesso--> 
            <strong> {{Session::get('mensagem-sucesso')}}</strong>
        </div>
    @endif
    @if(Session::has('mensagem-falha'))
        <div class=""> <!--Formatar a mensagem de falha--> 
            <strong> {{Session::get('mensagem-falha')}}</strong>
        </div>
    @endif

    <div class="pagina container">
        {{-- chamada para incluir o aside --}}
        @include('aside-conta')
        
        <main>
            <h1>Minhas compras</h1>

            @forelse($compras as $pedido) <!-- lista as compras --> 

            <div class="produto">
                <div class="row">
                    <div class="col-6">
                        <span><b>Data do pedido:</b></span>
                        <span class="date-value">{{ $pedido->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="col-6">
                        <span><b>Nº do pedido:</b></span>
                        <span class="purchase-id-value">{{ $pedido->id}}</span>
                    </div>
                </div>
                <form method = "POST" action = "{{route('carrinho.cancelar')}}">
                    {{ csrf_field() }}
                    <input type = "hidden" name = "pedido_id" value = "{{ $pedido->id}}">
                        <div class="row mt-3">
                            @php
                                $total_pedido = 0;
                            @endphp

                            @foreach($pedido->pedido_produto-itens as $Pedido_produto)
                                @php 
                                    $total_produto = $pedido_produto->price - $pedido_produto->discount;
                                    $total_pedido += $total_produto;
                                @endphp

                            <div class="col-3">
                                <img src="#" class="account-image">
                            </div>

                                @if($pedido_produto->status == 'PA')
                                    <p>
                                        <input type = "checkbox" id = "item {{$pedido_produto->id}}" name = "id[]" value = "{{$pedido_produto->id}}" />
                                        <label for = "item {{$pedido_produto-> id}} " > Selecionar </label>
                                    </p>
                                @else
                                    <strong> CANCELADO </strong>
                                @endif

                            <div class="col-9">
                                <p>Vendido por <a class="loja" href="/loja/{id}">{{ $pedido->store->name_store }}</a></p>
                                <h6>Valor<h6> 
                                    <p>R${{number_format($pedido_produto->product->price, 2, ',', '.')}}</p>
                                <h6>Descontos</h6>
                                    <p>R${{number_format($pedido_produto->product->discount, 2, ',', '.')}}</p>
                                <h6>Total do produto</h6>
                                    <p>R${{number_format($total_produto, 2, ',', '.')}}</p>
                            @endforeach

                                <h6>Total do pedido</h6>
                                    <p>R${{number_format($total_pedido, 2, ',', '.')}}</p>

                                <!-- <a class="btn mt-2 text-light" href="/">Ver detalhes</a> -->

                                <button type = "submit" class="btn mt-2 text-light"> Cancelar </button>
                            </div>
                    </div>
                </form>
            @empty
                <h6>
                @if($cancelados->count() >0) {
                    Neste momento não há nenhuma compra válida.
                }
                @else
                    Você ainda não fez nenhuma compra.
                @endif
                </h6>
            @endforelse     
            </div>






            <h1>Compras canceladas</h1>

            @forelse($cancelados as $pedido) <!-- lista as compras --> 

            <div class="produto">
                <div class="row">
                    <div class="col-6">
                        <span><b>Data do pedido:</b></span>
                        <span class="date-value">{{ $pedido->created_at->format('d/m/Y H:i') }}</span>
                        <span><b>Cancelado em:</b></span>
                        <span class="date-value">{{ $pedido->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="col-6">
                        <span><b>Nº do pedido:</b></span>
                        <span class="purchase-id-value">{{ $pedido->id}}</span>
                    </div>
                </div>
                <div class="row mt-3">
                    @php
                        $total_pedido = 0;
                    @endphp

                    @foreach($pedido->pedido_produto-itens as $Pedido_produto)
                        @php 
                            $total_produto = $pedido_produto->price - $pedido_produto->discount;
                            $total_pedido += $total_produto;
                        @endphp

                    <div class="col-3">
                        <img src="#" class="account-image">
                    </div>
                    <div class="col-9">
                        <p>Vendido por <a class="loja" href="/loja/{id}">{{ $pedido->store->name_store }}</a></p>
                        <h6>Valor<h6> 
                            <p>R${{number_format($pedido_produto->product->price, 2, ',', '.')}}</p>   <!-- Valor do produto -->
                        <h6>Descontos</h6>
                            <p>R${{number_format($pedido_produto->product->discount, 2, ',', '.')}}</p> <!-- desconto -->
                        <h6>Total do produto</h6>
                            <p>R${{number_format($total_produto, 2, ',', '.')}}</p>
                    @endforeach

                        <h6>Total do pedido</h6>
                            <p>R${{number_format($total_pedido, 2, ',', '.')}}</p>

                        <!-- <a class="btn mt-2 text-light" href="/">Ver detalhes</a> -->
                    </div>
                </div>
            @empty
                <h6>Nenhuma compra foi cancelada até o momento.</h6>
            @endforelse     
            </div>
        </main>
    </div>
@endsection