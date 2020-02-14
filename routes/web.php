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

Route::get('/configuracoes/{id}', 'UsuarioController@edit');
Route::put('/configuracoes/{id}', 'UsuarioController@update');
Route::delete('/delete/{id}', 'UsuarioController@destroy');







Route::get('/meus-produtos', 'ProdutoController@index');
Route::get('/incluir-produto','ProdutoController@create');

// CRUD DE CONTATOS
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');

Route::post('/incluir-produto','ProdutoController@store');
Route::get('/produto/{id}', 'ProdutoController@show');








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
Route::post('/loja/{id}','AvaliacaoLojaController@store');

// Avaliacao produto
Route::get('/produto/{id}', 'AvaliacaoProdutoController@create');
Route::post('/produto/{id}','AvaliacaoProdutoController@store');



// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');
// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');



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




