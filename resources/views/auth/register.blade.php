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
            <div class="form-group">
                <label for="date_of_birth"><b>Data de nascimento</b></label>
                <input id="date_of_birth" type="date" class="form-control @error('password') is-invalid @enderror" name="date_of_birth" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cpf"><b>CPF</b></label>
                <input id="cpf" type="text" class="form-control @error('password') is-invalid @enderror" name="cpf" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="address"><b>Endereço</b></label>
                <input id="address" type="text" class="form-control @error('password') is-invalid @enderror" name="address" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="number"><b>Número</b></label>
                <input id="number" type="number" class="form-control @error('password') is-invalid @enderror" name="number" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="complement"><b>Complemento</b></label>
                <input id="complement" type="text" class="form-control @error('password') is-invalid @enderror" name="complement" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="city"><b>Cidade</b></label>
                <input id="city" type="text" class="form-control @error('password') is-invalid @enderror" name="city" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ufs_id"><b>UF</b></label>
                <select name="ufs_id" id="">
                    <option selected disabled>Selecione uma opção</option>
                    @foreach ($ufs as $uf)
                        <option value="{{ $uf['id'] }}">{{ $uf['state'] }}</option>
                    @endforeach
                </select>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cep"><b>CEP</b></label>
                <input id="cep" type="number" class="form-control @error('password') is-invalid @enderror" name="cep" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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