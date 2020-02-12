// aparecer o formulário de avaliação da loja quando o botão for clicado
$('#avaliar-loja').click(function() {
    $('#form-loja').show();
});

// aparecer o formulário de avaliação do produto quando o botão for clicado
$('#avaliar-produto').click(function() {
    $('#form-produto').show();
});

// no clique em "cliente" ir para a próxima página (de cadastro do usuário)
$('#cliente').click(function(){
    window.location.href='/register';
 })

// no clique em "vendedor" ir para a próxima página (de cadastro com duas etapas)
$('#vendedor').click(function(){
    window.location.href='/';
 })
