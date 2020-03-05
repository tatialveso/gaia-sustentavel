<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .titulo {
        height: 50px;
        background-color: #54775e;
        }
        .titulo h5 {
            margin: 0;
            padding: 0;
            color: white;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .img-incluir {
            width: 20%;
            display: flex;
            justify-content: center;
            align-self: center;
            opacity: 0.6;
        }

        .btn {
            background-color: #54775e;
        }
    </style>
    <title>Gaia sustentável</title>
</head>
<body>
    <header class="d-flex justify-content-center">
        <a href="/"><img src="/img/logo/gaia-branco.png" alt="Gaia Sustentável"></a>
    </header>

    <div class="titulo">
        <h5>Incluir novo produto</h5>
    </div>

    <div class="container">
        <form action="/incluir-produto" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-4">
                <div class="col-6">
                    <h5>Especificações</h5>
                    <ul>
                        <li><b>Tamanho:</b> a imagem do seu produto deve ter proporção 1:1;</li>
                        <li><b>Formato:</b> só serão aceitados arquivos com extensão de imagem.</li>
                    </ul>
                </div>
                
                <div class="col-6 align-middle">
                    <label for=""><b>Foto do produto</b></label>
                    <div class="custom-file">
                        <input type="file" name="img_product" class="custom-file-input @error('img_product') is-invalid @enderror" id="customFile">
                        <label class="custom-file-label" for="customFile">Escolher foto</label>
                        <div class="invalid-feedback">{{$errors->first('img_product')}}</div>    
                    </div>
                </div>
            </div>
            
            <div class="form-row">
                <div class="col-6 form-group">
                    <label><b>Categoria</b></label>
                    <select type="text" name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option selected disabled>Selecione uma categoria</option>
                        @foreach($categories as $category)
                            <option value='{{ $category->id }}'>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="invalid-feedback">{{$errors->first('category_id')}}</div>    
                </div>
                <div class="col-6 form-group">
                    <label><b>Subcategoria</b></label>
                    <select type="text" name="subcategory_id" class="form-control @error('subcategory_id') is-invalid @enderror">
                        <option selected disabled>Selecione uma subcategoria</option>
                        @foreach($subcategories as $subcategory)
                            <option value='{{ $subcategory->id }}'>{{ $subcategory->name }}</option>
                        @endforeach    
                    </select>
                    <div class="invalid-feedback">{{$errors->first('subcategory_id')}}</div>    
                </div>
            </div>
            <div class="form-row">
                <div class="col-8 form-group">
                    <label><b>Nome do produto</b></label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Título do Produto">
                    <div class="invalid-feedback">{{$errors->first('name')}}</div>
                </div>
                <div class="col-4 form-group">
                    <label><b>Preço</b></label>
                    <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="Preço do produto">
                    <div class="invalid-feedback">{{$errors->first('price')}}</div>
                </div>
            </div>
            <div class="form-group">
                <label><b>Descrição do produto</b></label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Escreva aqui as características do seu produto"></textarea>
                <div class="invalid-feedback">{{$errors->first('description')}}</div>
            </div>
            <div class="form-group">
                <label><b>Composição do produto</b></label>
                <textarea class="form-control @error('composition') is-invalid @enderror" name="composition" placeholder="Escreva aqui os ingredientes do seu produto"></textarea>
                <div class="invalid-feedback">{{$errors->first('composition')}}</div>
            </div>
    
            <button type="submit" class="mt-4 mb-5 btn text-light">Cadastrar novo produto</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="{{ asset('js/functions.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
  

