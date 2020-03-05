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
Route::get('/produto/{id}', 'HomeController@produto');

Route::auth();
Auth::routes();

// PÁGINAS INSTITUCIONAIS
Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

// USUÁRIOS
Route::get('/configuracoes', 'UserController@index')->name('configuracoes.index')->middleware('auth');
Route::put('/configuracoes', 'UserController@update')->middleware('auth');
Route::delete('/configuracoes', 'UserController@destroy')->middleware('auth');
Route::get('/logout', 'Auth\LoginController@logout');

// SEGURANÇA DE DADOS
Route::get('/seguranca', 'SegurancaController@index')->name('seguranca.index')->middleware('auth');
Route::post('/seguranca/atualizar-senha', 'SegurancaController@updatePassword')->middleware('auth');
Route::post('/seguranca/atualizar-email', 'SegurancaController@updateEmail')->middleware('auth');

// FALE CONOSCO
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');

// SISTEMA DE BUSCA
Route::get('/busca', 'ProdutoController@search');
Route::post('/busca', 'ProdutoController@search');

// PRODUTOS
Route::get('/meus-produtos','ProdutoController@index')->middleware('auth');
Route::get('/incluir-produto','ProdutoController@create')->middleware('auth');
Route::post('/incluir-produto','ProdutoController@store')->middleware('auth');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::get('/meu-produto/{id}','ProdutoController@edit')->middleware('auth');
Route::patch('/meu-produto/{id}','ProdutoController@update')->middleware('auth');
Route::delete('/deletar-produto/{id}','ProdutoController@destroy')->middleware('auth');

// LOJA
Route::get('/criar-loja', 'LojaController@create')->middleware('auth');
Route::post('/criar-loja', 'LojaController@store')->middleware('auth');
Route::get('loja/{id}', 'LojaController@show');
Route::get('/minha-loja', ['uses'=>'LojaController@edit', 'as'=>'minha-loja.edit'], 'LojaController@edit')->middleware('auth');
Route::patch('/minha-loja', 'LojaController@update')->middleware('auth');
Route::delete('/deletar-loja', 'LojaController@destroy')->middleware('auth');

// AVALIAÇÃO DE LOJA
Route::post('/loja/{id}','AvaliacaoLojaController@store')->name('loja');
Route::get('/aval-blocked','AvaliacaoLojaController@avalBlocked')->middleware('auth');

// AVALIAÇÃO DE PRODUTO
Route::post('/produto/{id}','AvaliacaoProdutoController@store')->name('produto');
//Route::post('/produto/{id}','AvaliacaoProdutoController@store'); outra forma de escrever junto com avaliacaoProdutoControler
Route::get('/avaliacao-blocked','AvaliacaoProdutoController@avaliacaoBlocked')->middleware('auth');

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

// CARRINHO DE COMPRAS
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index')->middleware('auth');
Route::get('/carrinho/adicionar', function() {return redirect()->route('carrinho.index');})->middleware('auth');
Route::post('/carrinho/adicionar', 'CarrinhoController@add')->name('carrinho.adicionar')->middleware('auth');
Route::delete('/carrinho/remover', 'CarrinhoController@delete')->name('carrinho.remover')->middleware('auth');
Route::get('/checkout', 'CarrinhoController@checkout')->middleware('auth');
Route::post('/carrinho/concluir', 'CarrinhoController@complete')->name('carrinho.concluir')->middleware('auth');
Route::get('/historico-compras', 'CarrinhoController@historico')->name('historico-compras')->middleware('auth');

// AVALIAÇÃO DE LOJA
Route::post('/loja/{id}','AvaliacaoLojaController@store');

// AVALIAÇÃO DE PRODUTO
Route::post('/produto/{id}','AvaliacaoProdutoController@store');