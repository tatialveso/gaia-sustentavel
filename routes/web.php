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
Route::get('/perfil/{id}', 'PerfilController@index');

// Página da loja
Route::get('/loja/{id}', 'LojaController@index');

// Página do produto
Route::get('/produto/{id}', 'ProdutoController@index');

// Quem Somos
Route::get('/sobre', 'SobreController@index');

// Como funciona
Route::get('/como-funciona', 'ComoController@index');

// Contato
Route::get('/contato', 'ContatoController@index');

// Cadastro de usuário
Route::get('/cadastro', 'CadastroController@create');
Route::post('cadastro/salvo', 'CadastroController@store');

// Login do usuário
Route::get('/login', 'LoginController@index');

// Incluir produto
Route::get('/incluir-produto','IncluirController@index');

// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');

// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');

// Favoritos
Route::get('/favoritos', 'FavoritoController@index');

// Configurações de dados do usuário
Route::get('/configuracoes', 'ConfiguracoesController@index');

// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index');

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