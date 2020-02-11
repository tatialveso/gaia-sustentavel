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

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/como-funciona', function () {
    return view('como-funciona');
});

Route::get('/cadastro', 'UsuarioController@create');
Route::post('/cadastro', 'UsuarioController@store');
Route::get('/configuracoes', 'UsuarioController@edit');
Route::put('/configuracoes', 'UsuarioController@update');
Route::delete('/conta/delete', 'UsuarioController@destroy');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index');



// Incluir produto
Route::get('/incluir-produto','IncluirController@index');
// Página do produto
Route::get('/produto/{id}', 'ProdutoController@index');
// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');
// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');



// Página inicial
Route::get('/', 'HomeController@index');

// Página inicial logado
Route::get('/perfil/{id}', 'PerfilController@index');

// Página da loja
Route::get('/loja/{id}', 'LojaController@index');

// Contato
Route::get('/contato', 'ContatoController@index');

// Login do usuário
Route::get('/login', 'LoginController@index');

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