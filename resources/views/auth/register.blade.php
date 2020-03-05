<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">
    
<title>Gaia sustentável</title>

<div class="container">
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
    </div>

    <div class="mb-3 d-flex justify-content-center">
        <h5>{{ __('Faça sua conta') }}</h5>
    </div>

    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label for="name"><b>Nome completo</b></label>
                <input id="name" style="width:500px" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email"><b>Endereço de e-mail</b></label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password"><b>Senha</b></label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm"><b>Confirme sua senha</b></label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="form-group mb-0">
                <div class="btn-produto d-flex justify-content-around">
                    <button type="submit" class="btn text-light">
                        {{ __('Cadastrar') }}
                    </button>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <h6>Já é cadastrado? <a class="text-dark" style="text-decoration:none" href="/login">Faça seu login.</a></h6>
            </div>
        </form>
    </div>
</div>