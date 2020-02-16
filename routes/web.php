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

Route::auth();
Auth::routes();

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/configuracoes', 'UserController@index')->middleware('auth');
Route::get('/configuracoes/{id}', 'UserController@edit')->middleware('auth');
Route::post('/configuracoes/{id}', 'UserController@update')->middleware('auth');
Route::delete('/configuracoes', 'UserController@destroy')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/meus-produtos', 'ProdutoController@index')->middleware('auth');
Route::get('/incluir-produto','ProdutoController@create')->middleware('auth');

// CRUD DE CONTATOS
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');

Route::post('/incluir-produto','ProdutoController@store')->middleware('auth');
Route::get('/produto/{id}', 'ProdutoController@show')->middleware('auth');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index')->middleware('auth');

// Route::get('/cadastro', 'CadastroController@create');
// Route::post('/cadastro', 'CadastroController@store');
Route::get('/loja/{id}', 'LojaController@show');
Route::get('/minha-loja/{id}', 'LojaController@edit')->middleware('auth');
Route::patch('/minha-loja/{id}', 'LojaController@update')->middleware('auth');
Route::delete('/delete/{id}', 'LojaController@destroy')->middleware('auth');

// Avaliacao loja
Route::get('/loja/{id}','AvaliacaoLojaController@create');
Route::post('/loja/{id}','AvaliacaoLojaController@store')->middleware('auth');

// Avaliacao produto
Route::get('/produto/{id}', 'AvaliacaoProdutoController@create');
Route::post('/produto/{id}','AvaliacaoProdutoController@store')->middleware('auth');

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
Route::get('/carrinho', 'CarrinhoController@index');

// Checkout de compras
Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@index')->middleware('auth');
