<aside>
    <h1>Minha Conta</h1>
    <ul>
        <li><a class="conta-menu" href="/configuracoes">Meus dados</a></li>
        <li><a class="conta-menu" href="/seguranca">Segurança</a></li>
        <li><a class="conta-menu" href="/favoritos">Favoritos</a></li>
        <li><a class="conta-menu" href="/historico-compras">Minhas compras</a></li>
        <li><a class="conta-menu" href="/minha-loja/{id}">Minha Loja</a></li>
        <li><a class="conta-menu" href="/meus-produtos">Meus produtos</a></li>
        <li><a class="conta-menu" href="/historico-vendas">Minhas vendas</a></li>
        <li><a class="conta-menu" href="/incluir-produto">Incluir produtos</a></li>
    </ul>
    <a href="{{route('logout')}}" class="btn btn-success">Seja um vendedor!</a>
    <br><br>
    <a href="{{route('logout')}}" class="btn btn-danger">Sair</a>
</aside>
