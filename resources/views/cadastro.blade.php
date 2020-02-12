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
    <div class="mb-3 d-flex justify-content-center">
        <h5>Crie a sua conta:</h5>
    </div>
    <div class="d-flex justify-content-center">
        <div>
            <div class="form-group">
                <label><b>Qual tipo de cadastro você quer fazer?</b></label>
            </div>
            <div class="form-group">
                <input class="form-check-input" type="radio" name="tipo_cadastro" value="cliente" id="cliente">
                <label class="form-check-label" for="exampleRadios1" data-container="body" data-toggle="popover" data-placement="bottom"
                data-content="Você poderá comprar produtos de lojas cadastradas.">
                    <b>Cliente</b>: quero apenas comprar produtos
                </label>
            </div>
            <div class="form-group">
                <input class="form-check-input" type="radio" name="tipo_cadastro" value="vendedor" id="vendedor">
                <label class="form-check-label" for="exampleRadios1">
                    <b>Vendedor</b>: quero criar uma loja e vender produtos,<br>
                    além de comprar de outras lojas
                </label>
            </div>
        </div>
    </div>        
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="{{ asset('js/functions.js') }}"></script>