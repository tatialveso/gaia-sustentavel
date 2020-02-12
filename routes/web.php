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

// CRUD DO PRODUTO
Route::get('/meus-produtos', 'ProdutoController@index');
Route::get('/incluir-produto','ProdutoController@create');
Route::post('/incluir-produto','ProdutoController@store');
Route::get('/produto/{id}', 'ProdutoController@show');
Route::get('/meus-produtos/{id}', 'ProdutoController@edit');
Route::patch('/meus-produtos/{id}', 'ProdutoController@update');
Route::delete('/meus-produtos/delete/{id}', 'ProdutoController@destroy');

// CRUD DE CONTATOS
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');





Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/cadastro-usuario', 'UsuarioController@create');
Route::post('/cadastro-usuario', 'UsuarioController@store');
Route::get('/configuracoes/{id}', 'UsuarioController@edit');
Route::put('/configuracoes/{id}', 'UsuarioController@update');
Route::delete('/delete/{id}', 'UsuarioController@destroy');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index');





// Route::get('/cadastro', 'CadastroController@create');
// Route::post('/cadastro', 'CadastroController@store');
Route::get('/loja/{id}', 'LojaController@show');
Route::get('/minha-loja/{id}', 'LojaController@edit');
Route::patch('/minha-loja/{id}', 'LojaController@update');
Route::delete('/delete/{id}', 'LojaController@destroy');





// Avaliacao loja
Route::get('/loja/{id}','AvaliacaoLojaController@create');
Route::post('/avaliacao-loja','AvaliacaoLojaController@store');




// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');
// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');

// Avaliacao produto
Route::post('/avaliacaoProduto','ProdutoController@store');

// Página inicial logado
Route::get('/perfil/{id}', 'PerfilController@index');



// Favoritos
Route::get('/favoritos', 'FavoritoController@index');

// Histórico de vendas
Route::get('/historico-vendas', 'VendaController@index');

// Histórico de compras
Route::get('/historico-compras', 'CompraController@index');

// Carrinho de compras
Route::get('/carrinho', 'CarrinhoController@index');

// Checkout de compras
Route::get('/checkout', 'CheckoutController@index');

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@index');




