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

// Página inicial
Route::get('/', 'HomeController@index');

// Página inicial logado
Route::get('/perfil/{id}', 'PerfilController@show');

// Página da loja
Route::get('/loja/{id}', 'LojaController@show');

// Página do produto
Route::get('/produto/{id}', 'ProdutoController@show');

// Quem Somos
Route::get('/sobre', 'SobreController@show');

// Como funciona
Route::get('/como-funciona', 'ComoController@show');

// Contato
Route::get('/contato', 'ContatoController@show');

// Cadastro de usuário
Route::get('/cadastro', 'CadastroController@show');

// Login do usuário
Route::get('/login', 'LoginController@show');

// Incluir produto
Route::get('/incluir-produto','IncluirController@show');

// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@show');

// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@show');

// Favoritos
Route::get('/favoritos', 'FavoritoController@show');

// Configurações de dados do usuário
Route::get('/meusdados', 'ConfiguracoesController@show');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@show');

// Histórico de vendas
Route::get('/historico-vendas', 'VendaController@show');

// Histórico de compras
Route::get('/historico-compras', 'CompraController@show');

// Carrinho de compras
Route::get('/carrinho', 'CarrinhoController@show');

// Checkout de compras
Route::get('/checkout', 'CheckoutController@show');

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@show');