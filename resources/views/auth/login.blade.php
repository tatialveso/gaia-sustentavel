<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
<link rel="stylesheet" type="text/css" href="{{ asset('css/StyleIndex.css') }}">

<title>Gaia sustentável</title>

<div class="container">
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
    </div>

    <div class="mb-3 d-flex justify-content-center">
        <h5>{{ __('Faça seu login') }}</h5>
    </div>

    <div class="d-flex justify-content-center">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email"><b>Endereço de e-mail</b></label>
                <div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="password"><b>Senha</b></label>
                <div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Lembrar da conexão') }}</label>
                    </div>
                </div>
            </div>

            <div class="form-group mb-0">
                <div class="btn-produto">
                    <button type="submit" class="btn text-light">{{ __('Login') }}</button>

                    @if (Route::has('password.request'))
                        <a class="btn-link ml-4" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-center mt-3">
        <h6>Ainda não é cadastrado? <a class="text-dark" style="text-decoration:none" href="/register">Faça seu cadastro.</a></h6>
    </div>
</div>
