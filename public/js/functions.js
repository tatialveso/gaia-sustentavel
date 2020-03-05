// aparecer o formulário de avaliação da loja quando o botão for clicado
$('#avaliar-loja').click(function() {
    $('#form-loja').show();
});

// aparecer o formulário de avaliação do produto quando o botão for clicado
$('#avaliar-produto').click(function() {
    $('#form-produto').show();
});

// ao clicar em enviar por um novo endereço aparece um novo formulário
$('#novo-endereco').click(function() {
    $('#checkout-form-novo').show();  
})

// caso já tenha clicado no outro botão quando clicar em novo endereço o outro form sumirá
$('#novo-endereco').click(function() {
    $('#checkout-form-preenchido').hide();  
})

// ao clicar em enviar pelo endereço cadastrado aparece um formulário preenchido
$('#seu-endereco').click(function() {
    $('#checkout-form-preenchido').show();
})

// caso já tenha clicado no outro botão quando clicar em endereço cadastrado o outro form sumirá
$('#seu-endereco').click(function() {
    $('#checkout-form-novo').hide();  
})