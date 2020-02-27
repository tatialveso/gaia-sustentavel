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

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::get('/configuracoes', 'UserController@index')->name('configuracoes.index')->middleware('auth');
//Route::get('/configuracoes/{id}', 'UserController@edit')->middleware('auth');
Route::put('/configuracoes', 'UserController@update')->middleware('auth');
Route::delete('/configuracoes', 'UserController@destroy')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');

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

// CRUD LOJA
Route::get('/criar-loja', 'LojaController@create')->middleware('auth');
Route::post('/criar-loja', 'LojaController@store')->middleware('auth');
Route::get('loja/{id}', 'LojaController@show');
Route::get('/minha-loja/{id}', 'LojaController@edit')->middleware('auth');
Route::patch('/minha-loja/{id}', 'LojaController@update')->middleware('auth');
Route::delete('/deletar-loja/{id}', 'LojaController@destroy')->middleware('auth');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index')->middleware('auth');

// Avaliacao loja
//Route::get('loja/{id}', 'AvaliacaoLojaController@show');
// Route::get('/loja/{id}','AvaliacaoLojaController@create');
//Route::post('/loja/{id}','AvaliacaoLojaController@store');

// Avaliacao produto
//Route::get('/produto/{id}', 'AvaliacaoProdutoController@create');
//Route::post('/produto/{id}','AvaliacaoProdutoController@store');

// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');
// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');

// Página inicial logado
Route::get('/perfil/{id}', 'PerfilController@index')->middleware('auth');

// Favoritos
Route::get('/favoritos', 'FavoritoController@index')->middleware('auth');

// Histórico de vendas
Route::get('/historico-vendas', 'VendaController@index')->middleware('auth');

// Histórico de compras
Route::get('/historico-compras', 'CompraController@index')->middleware('auth');

// Carrinho de compras
Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('carrinho.index'); //Verificar: vai direcionar para a página de busca de produtos?
}); // essa rota não permite q o usuário digite esta url e prossiga sem estar logado.
Route::post('/carrinho/adicionar', 'CarrinhoController@add')->name('carrinho.adicionar');
Route::delete('/carrinho/remover', 'CarrinhoController@delete')->name('carrinho.remover');
Route::post('/carrinho/concluir', 'CarrinhoController@complete')->name('carrinho.concluir');
Route::get ('/carrinho/compras', 'CarrinhoController@purchase')->name('carrinho.compras');
Route::post ('/carrinho/cancelar', 'CarrinhoController@cancel')->name('carrinho.cancelar');
Route::post ('/carrinho/desconto', 'CarrinhoController@discount')->name('carrinho.desconto');


// Checkout de compras
Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@index')->middleware('auth');
