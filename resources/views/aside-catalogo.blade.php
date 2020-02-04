<aside>
    {{-- filtro de categorias --}}
    <div class="tipo mb-3">
        <h6>Características</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">Orgânico</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">Vegano</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">Sem plástico</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">Hipoalergênico</label>
        </div>
    </div>

    {{-- filtro de subcategorias --}}
    <div class="subcategoria mb-3">
        <h6>Subcategorias</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">Cabelo</label>
        </div>
    </div>

    {{-- filtro de preço --}}
    <div class="preco mb-3">
        <h6>Faixa de preço</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label">até R$ 49.00</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label" for="defaultCheck2">R$ 50.00 - R$ 89.00</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label" for="defaultCheck2">R$ 90.00 - R$ 149.00</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label" for="defaultCheck2">Acima de R$ 150,00</label>
        </div>
    </div>

    {{-- filtro para certificações --}}
    <div class="certificado mb-3">
        <h6>Certificação</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" value="">
            <label class="form-check-label" for="defaultCheck2">Apenas produtos com certificação</label>
        </div>
    </div>

    <button class="btn text-light btn-sm" style="background-color: #54775e;" type="submit">Filtrar</button>
</aside>