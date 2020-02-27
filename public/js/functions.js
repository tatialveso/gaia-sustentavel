// aparecer o formulário de avaliação da loja quando o botão for clicado
$('#avaliar-loja').click(function() {
    $('#form-loja').show();
});

// aparecer o formulário de avaliação do produto quando o botão for clicado
$('#avaliar-produto').click(function() {
    $('#form-produto').show();
});

// ao clicar aparece o campo para preencher o valor do frete
$('#frete').click(function() {
    $('#frete-valor').show();
});