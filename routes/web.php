<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/produto/{id}', 'HomeController@produto'); // Busca pelo produto direto da index.

Route::auth();
Auth::routes();

// PÁGINAS INSTITUCIONAIS
Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

// CRUD DE USUÁRIOS
Route::get('/configuracoes', 'UserController@index')->name('configuracoes.index')->middleware('auth');
Route::put('/configuracoes', 'UserController@update')->middleware('auth');
Route::delete('/configuracoes', 'UserController@destroy')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout');
// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index')->middleware('auth');

// CRUD DE CONTATOS
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');

// CRUD DE PRODUTOS
Route::get('/meus-produtos','ProdutoController@index')->middleware('auth');
Route::get('/incluir-produto','ProdutoController@create')->middleware('auth');
Route::post('/incluir-produto','ProdutoController@store')->middleware('auth');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::get('/meu-produto/{id}','ProdutoController@edit')->middleware('auth');
Route::patch('/meu-produto/{id}','ProdutoController@update')->middleware('auth');
Route::delete('/deletar-produto/{id}','ProdutoController@destroy')->middleware('auth');

// SISTEMA DE BUSCA
Route::get('/busca', 'ProdutoController@search');
Route::post('/busca', 'ProdutoController@search');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index')->name('seguranca.index')->middleware('auth');
Route::post('/seguranca/atualizar-senha', 'SegurancaController@updatePassword')->middleware('auth');
Route::post('/seguranca/atualizar-email', 'SegurancaController@updateEmail')->middleware('auth');

// CRUD LOJA
Route::get('/criar-loja', 'LojaController@create')->middleware('auth');
Route::post('/criar-loja', 'LojaController@store')->middleware('auth');
Route::get('loja/{id}', 'LojaController@show');
Route::get('/minha-loja', ['uses'=>'LojaController@edit', 'as'=>'minha-loja.edit'], 'LojaController@edit')->middleware('auth');
Route::patch('/minha-loja', 'LojaController@update')->middleware('auth');
Route::delete('/deletar-loja', 'LojaController@destroy')->middleware('auth');

// AVALIAÇÃO DE LOJA
Route::post('/loja/{id}','AvaliacaoLojaController@store');

// AVALIAÇÃO DE PRODUTO
Route::post('/produto/{id}','AvaliacaoProdutoController@store');

// CATÁLOGO DOS PRODUTOS
Route::get('/higiene-pessoal', 'PessoalController@index');
Route::get('/higiene-pessoal/cabelos', 'PessoalController@cabeloIndex');
Route::get('/higiene-pessoal/rosto', 'PessoalController@rostoIndex');
Route::get('/higiene-pessoal/cosmeticos', 'PessoalController@cosmeticosIndex');
Route::get('/higiene-pessoal/corpo-banho', 'PessoalController@banhoIndex');
Route::get('/higiene-pessoal/itens-pessoais', 'PessoalController@pessoalIndex');
Route::get('/casa-ambiente', 'CasaController@index');
Route::get('/casa-ambiente/limpeza', 'CasaController@limpezaIndex');
Route::get('/casa-ambiente/aromatizador', 'CasaController@aromatizadorIndex');






// Histórico de vendas
Route::get('/historico-vendas', 'VendaController@index')->middleware('auth');

// Histórico de compras
Route::get('/historico-compras', 'CompraController@index')->name('historico-compras');
Route::post ('/historico-compras/cancelar', 'CompraController@cancel')->name('compras.cancelar');

// Carrinho de compras
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('carrinho.index'); //Verificar: vai direcionar para a página de busca de produtos?
}); // essa rota não permite q o usuário digite esta url e prossiga sem estar logado.
Route::post('/carrinho/adicionar', 'CarrinhoController@add')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@delete')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@complete')->name('carrinho.concluir');
Route::post ('/carrinho/desconto', 'CarrinhoController@discount')->name('carrinho.desconto');
Route::get('/checkout', 'CarrinhoController@checkout')->middleware('auth');

// Checkout de compras

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@index')->middleware('auth');
