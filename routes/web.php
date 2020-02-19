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

Route::get('/configuracoes', 'UserController@index')->name('configuracoes.index')->middleware('auth');
//Route::get('/configuracoes/{id}', 'UserController@edit')->middleware('auth');
Route::put('/configuracoes', 'UserController@update')->middleware('auth');
Route::delete('/configuracoes', 'UserController@destroy')->middleware('auth');

Route::get('/logout', 'Auth\LoginController@logout');






Route::get('/meus-produtos', 'ProdutoController@index');
//Route::get('/incluir-produto','ProdutoController@create');

// CRUD DE CONTATOS
Route::get('/contato', 'ContatoController@create');
Route::post('/contato', 'ContatoController@store');

//Route::post('/incluir-produto','ProdutoController@store');
Route::get('/produto/{id}', 'ProdutoController@index');

// CRUD DE PRODUTOS

Route::get('/incluir-produto','IncluirController@create');
Route::post('/incluir-produto','IncluirController@store');
Route::get('/meus-produtos/{id}','IncluirController@show');
Route::get('/meu-produto/{id}/edit','IncluirController@edit');
Route::patch('/incluir-produto/(id}','IncluirController@update');
Route::delete('/incluir-produto/{id}','IncluirController@destroy');








// Segurança de dados do usuário
Route::get('/seguranca', 'SegurancaController@index')->middleware('auth');

// Route::get('/cadastro', 'CadastroController@create');
// Route::post('/cadastro', 'CadastroController@store');
Route::get('/loja/{id}', 'LojaController@index');
Route::get('/minha-loja/{id}', 'LojaController@edit')->middleware('auth');
Route::patch('/minha-loja/{id}', 'LojaController@update')->middleware('auth');
Route::delete('/minha-loja/{id}', 'LojaController@destroy')->middleware('auth');

// Avaliacao loja
Route::get('/avaliacao-loja/{id}','AvaliacaoLojaController@create');
Route::post('/avaliacao-loja/{id}','AvaliacaoLojaController@store');

// Avaliacao produto
Route::get('/avaliacao-produto/{id}', 'AvaliacaoProdutoController@create');
Route::post('/avaliacao-produto/{id}','AvaliacaoProdutoController@store');

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
Route::get('/carrinho/adicionar', function() {
    return redirect()->route('index'); //Verificar: vai direcionar para a página de busca de produtos?
}); // essa rota não permite q o usuário digite esta url e prossiga sem estar logado.
Route::post('/carrinho/adicionar', 'CarrinhoController@add'); // acrescentar o name da rota q despois será incluida na blade


// Checkout de compras
Route::get('/checkout', 'CheckoutController@index')->middleware('auth');

// Resumo do pedido
Route::get('/resumo-pedido', 'ResumoController@index')->middleware('auth');
