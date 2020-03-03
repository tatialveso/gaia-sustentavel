@extends('layout')

<link rel="stylesheet" type="text/css" href="{{ asset('css/StylesIndex.css') }}">

<title>Sobre a Gaia sustentável</title>

@section('sobre-assets') 
    <style>
        .imagem img {
            object-fit: cover;
            height: 400px;
        }

        .quem-gaia .card-img {
            height: 400px;
            object-fit: cover;
        }
    </style>
@endsection

@section('institucionais')
    <div class="imagem">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/paginas/quem-somos.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 quem-gaia">
        <h1 class="text-center">Quem é a Gaia</h1>
        <div class="card border-0 mb-3 mt-5">
            <p class="card-text text-justify">A Gaia sustentável foi criada como projeto integrador do curso de
                Desenvolvimento WEB Full Stack da Digital House.<br><br>
                Com o intuito de facilitar a procura e o acesso de produtos sustentáveis, a Gaia oferece uma
                plataforma para produtores autônomos que querem alcançar um maior público consumidor e para
                pessoas que desejam mudar seus hábitos, se tornando mais sustentáveis e encontrar produtos
                perto de onde residem.<br><br>
                A Gaia é uma plataforma em que os usuários encontraram produtos de higiene pessoal e de
                limpeza da casa que são veganos, naturais, orgânicos, livres de produtos químicos, sem
                plásticos e outras substâncias que agridem o meio ambiente e ao nosso corpo. Acreditamos que
                é essencial
                mudarmos os nossos hábitos para que possamos ter um mundo habitável no futuro, tanto para
                nós quanto para futuras gerações, e a mudança começa agora.<br><br>
                <b>Se junte à Gaia e seja a mudança que você quer ver no mundo.</b>
            </p>
        </div>
    </div> 
@endsection
