{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">

{{-- nome da página --}}
<title>Gaia Sustentável</title>

@section('casa')

        <div class="container mt-3">
            <div class="row">
            {{-- Início Row 1 --}}
                <div class="col-lg-3">
                    <h5>Marcas</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Bio Wash
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Bioz Green
                        </label>
                    </div>
                    <br />
                    <h5>Faixa de preço</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            até R$ 49,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            R$ 50,00 até R$ 89,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            R$ 90,00 até R$ 149,00
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Acima de R$ 150,00
                        </label>
                    </div>

                </div>{{-- col.// --}}
                
                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="img/produto13.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Lava Roupas Líquido</h5>
                            <p class="card-text text-center">Super Concentrado - 650ml</p>
                            <p class="card-text">R$ 40,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="mg/produto14.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Lava Louças Natural</h5>
                            <p class="card-text text-center">Sem fragrância</p>
                            <p class="card-text">R$ 22,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                            </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="img/produto15.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Limpador Multiuso</h5>
                            <p class="card-text text-center">Verbena</p>
                            <p class="card-text">R$ 22,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                            </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}

            </div>
            {{-- Fim Row 1 --}}

            <div class="row row justify-content-end mt-3">
            {{-- Início Row 2 --}}

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="img/produto16.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Flanela</h5>
                            <p class="card-text text-center">Algodão Cru</p>
                            <p class="card-text">R$ 9,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                            </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="img/produto17.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Limpa Vidros</h5>
                            <p class="card-text text-center">650 ml</p>
                            <p class="card-text">R$ 30,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                            </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto18.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Kit Limpeza</h5>
                            <p class="card-text text-center">Sem fragrância</p>
                            <p class="card-text">R$ 130,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                            </div>{{-- cardbody// --}}
                    </div>{{-- card// --}}
                </div>{{-- col.// --}}
           </div>
            {{-- Fim Row 2 --}}
        </div>{{-- container.// --}}
@endsection