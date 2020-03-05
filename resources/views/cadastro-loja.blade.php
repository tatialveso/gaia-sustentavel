<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
<link rel="stylesheet" type="text/css" href="{{ asset('css/styleIndex.css') }}">
    
<title>Gaia sustentável</title>

<div class="container">
    <div class="d-flex justify-content-center">
        <header>
            <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
        </header>
    </div>

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label><b>Nome da Loja</b></label>
            <input type="text" class="form-control @error('name_store') is-invalid @enderror" name="name_store" placeholder="Digite o nome de sua loja">
            <div class="invalid-feedback">{{$errors->first('name_store')}}</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label><b>Cidade</b></label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" placeholder="Digite o nome da sua cidade">
                <div class="invalid-feedback">{{$errors->first('location')}}</div>
            </div>
            <div class="col-md-6 mb-3">
                <label><b>Data de criação</b></label>
                <input type="date" class="form-control @error('criacao') is-invalid @enderror" name="criacao" placeholder="Digite o ano em que a loja foi criada">
                <div class="invalid-feedback">{{$errors->first('criacao')}}</div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <label><b>Categoria</b></label>
                <select class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                    <option selected disabled>Selecione uma categoria</option>
                    @foreach($categories as $category)
                        <option value='{{ $category->id }}'>{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="invalid-feedback">{{$errors->first('category_id')}}</div>
            </div>
            <div class="col-md-6 mb-3">
                <label for=""><b>Carregar imagem da loja</b></label>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror">
                    <label class="custom-file-label" for="customFile">Escolha uma imagem</label>
                    <div class="invalid-feedback">{{$errors->first('image')}}</div>
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <label><b>Biografia</b></label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Conte-nos um pouco da história da sua loja"></textarea>
            <div class="invalid-feedback">{{$errors->first('description')}}</div>
        </div>

        <div class="btn-produto d-flex justify-content-around">
            <button type="submit" class="btn text-light">Criar loja</button>
        </div>
    </form>
</div>