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


Route::get('/', 'HomeController');
Route::view('/teste', 'teste');

Route::prefix('/config')->group(function () {

    Route::get('/', 'Admin\ConfigController@index');
    Route::get('info', 'Admin\ConfigController@info');
    Route::get('permissoes', 'Admin\ConfigController@permissoes');
});


Route::prefix('/produtos')->group(function () {

    Route::get('/', 'ProdutosController@listar')->name('produtos.listar');  //Listagem de Produtos

    Route::get('adicionar', 'ProdutosController@adicionar')->name('produtos.adicionar');
    Route::post('adicionar', 'ProdutosController@adicionarAction'); //Ação de adicionar novo produto

    Route::get('editar{id}', 'ProdutosController@editar')->name('produtos.editar'); //Editar Produto
    Route::post('editar{id}', 'ProdutosController@editarAction'); //Ação de edição

    Route::get('delete/{id}', 'ProdutosController@deletar')->name('produtos.deletar'); //Ação de deletar
    Route::get('marcar/{id}', 'ProdutosController@done')->name('produtos.done');  // Marcar resolvido


});

Route::fallback(function () {
    return view('404');
});
