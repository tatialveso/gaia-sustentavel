{{-- chamada do layout --}}
@extends('layout')

{{-- chamada do css --}}
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleLoja.css') }}">

{{-- chamada do bootstrap --}}
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    @section ('higiene')
        <div class="container mt-3">
            <div class="row">
                <!--inicio row 1.// -->
                <div class="col-lg-3">
                    <h5>Marcas</h5>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Herbia
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            LCS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Simple Organic
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                        <label class="form-check-label" for="defaultCheck2">
                            Terra Flor
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

                </div><!-- col.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto2.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Hidratante Capilar</h5>
                            <p class="card-text text-center">Água de coco</p>
                            <p class="card-text">R$ 65,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center" style="width: 16rem">
                        <img src="/img/produto3.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Leave In</h5>
                            <p class="card-text text-center">Hibiscos - LCS</p>
                            <p class="card-text">R$ 45,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center" style="width: 16rem">
                        <img src="/img/produto4.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Desodorante</h5>
                            <p class="card-text text-center">Stick</p>
                            <p class="card-text">R$ 35,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 1.// -->

            <div class="row row justify-content-end mt-3">
                <!--inicio row 2.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto6.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">BB Cream Natural</h5>
                            <p class="card-text text-center">Orgânico</p>
                            <p class="card-text">R$ 65,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto7.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Batom Cremoso</h5>
                            <p class="card-text text-center">Orgânico</p>
                            <p class="card-text">R$ 57,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto8.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Glitter Biodegradável</h5>
                            <p class="card-text text-center">1 grama</p>
                            <p class="card-text">R$ 10,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 2.// -->

            <div class="row row justify-content-end mt-3">
                <!--inicio row 3.// -->

                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto10.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Homem pós barbal</h5>
                            <p class="card-text text-center">Orgânico - 100 gramas</p>
                            <p class="card-text">R$ 57,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto11.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Óleo Vegetal</h5>
                            <p class="card-text text-center">Amêndoas Doce - 50 ml</p>
                            <p class="card-text">R$ 27,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->


                <div class="col-lg-3">
                    <div class="card text-center">
                        <img src="/img/produto12.webp" class="card-img-top" alt="...">
                        <figcaption class="info-wrap border-top"></figcaption>
                        <div class="card-body">
                            <h5 class="card-title text-center">Pomada Natural</h5>
                            <p class="card-text text-center">Inflamação da pele</p>
                            <p class="card-text">R$ 48,00</p>
                            <div class="btn-produto">
                                <a href="#" class="btn text-light">Comprar</a>
                                <a href="#" class="float-right"><i class="mr-3 material-icons">favorite_border</i></a>
                            </div>
                        </div><!-- cardbody // -->
                    </div><!-- card // -->
                </div><!-- col.// -->

            </div>
            <!--fim row 3.// -->



        </div><!-- container.// -->

    @endsection    
    
    