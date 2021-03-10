<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index'])->name('homepage');



Route::prefix('/produtos')->group(function () {

    Route::get('/', [ ProdutosController::class, 'listar'])->name('produtos.listar');  //Listagem de Produtos
    Route::get('/p-{id}', [ProdutosController::class, 'visualizar'])->name('produtos.visualizar');
    Route::get('adicionar', [ProdutosController::class, 'adicionar'])->name('produtos.adicionar');

    Route::get('editar/{id}', [ProdutosController::class, 'editar'])->name('produtos.editar');
    Route::post('adicionar', [ProdutosController::class, 'adicionarAction']); //Ação de adicionar novo produto
    Route::post('editar/{id}', [ProdutosController::class, 'editarAction']); //Ação de edição

    Route::get('apagar/{id}', 'ProdutosController@deletar')->name('produtos.deletar'); //Ação de deletar



});

Route::fallback(function () {
    return view('404');
});
