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

//ROTAS PARA CRUD DE LOJA
// Cadastro de Loja
Route::get('/cadastro', 'CadastroController@create');
Route::post('/cadastro', 'CadastroController@store');

// Configurações de dados da Loja
Route::get('/minha-loja/{id}', 'LojaController@edit');
Route::patch('/minha-loja/{id}', 'LojaController@update');
Route::delete('/delete/{id}', 'LojaController@destroy');

// Vendas da Loja
Route::get('/historico-vendas', 'CadastroController@index'); //Editar
// Incluir produtos da Loja
Route::get('/incluir-produto', 'ConfiguracoesLojaController@index'); //Editar

// Avaliacao loja
Route::get('/loja/{id}','AvaliacaoLojaController@create');
Route::post('/avaliacao-loja','AvaliacaoLojaController@store');

// ROTAS PARA CRUD DE PRODUTO

// Incluir produto

Route::get('/incluir-produto','IncluirController@create');
Route::post('/incluir-produto','IncluirController@store');
// Página do produto
Route::get('/produto/{id}', 'ProdutoController@index');
// Catálogo de higiene pessoal
Route::get('/higiene-pessoal', 'PessoalController@index');
// Catálogo de casa e ambiente
Route::get('/casa-ambiente', 'CasaController@index');

// Avaliacao produto
Route::post('/avaliacaoProduto','ProdutoController@store');

// Página inicial logado
Route::get('/perfil/{id}', 'PerfilController@index');

// Página da loja
Route::get('/loja/{id}', 'LojaController@index');

// Contato
Route::get('/contato', 'ContatoController@index');

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


Route::get('/', 'HomeController@index');

Route::auth();
Auth::routes();

// Fale Conosco
Route::get('/fale-conosco', 'ContatoController@create');
Route::post('/fale-conosco', 'ContatoController@store');
