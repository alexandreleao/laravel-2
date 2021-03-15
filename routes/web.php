<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ServicosController;
use App\Http\Controllers\HomeController;


    Route::get('/', [HomeController::class, 'index'])->name('homepage');
    Route::get('/', [HomeController::class, 'listar'])->name('homepage');

Route::prefix('/produtos')->group(function () {

    Route::get('/', [ ProdutosController::class, 'listar'])->name('produtos.listar');  //Listagem de Produtos
    Route::get('/p-{id}', [ProdutosController::class, 'visualizar'])->name('produtos.visualizar');
    Route::get('adicionar', [ProdutosController::class, 'adicionar'])->name('produtos.adicionar');

    Route::get('editar/{id}', [ProdutosController::class, 'editar'])->name('produtos.editar');
    Route::post('adicionar',  [ProdutosController::class, 'adicionarAction']); //Ação de adicionar novo produto
    Route::post('editar/{id}', [ProdutosController::class, 'editarAction']); //Ação de edição

    Route::get('apagar/{id}', 'ProdutosController@deletar')->name('produtos.deletar'); //Ação de deletar

});

Route::prefix('/servicos')->group(function(){
    Route::get('/', [ServicosController::class,'listar'])->name('servicos.listar');
    Route::get('/s-{id}', [ServicosController::class, 'visualizar'])->name('servicos.visualizar');
    Route::get('adicionar', [ServicosController::class, 'adicionar'])->name('servicos.adicionar');

    Route::get('editar/{id}', [ServicosController::class, 'editar'])->name('servicos.editar');
    Route::post('adicionar',  [ServicosController::class, 'adicionarAction']); //Ação de adicionar novo produto
    Route::post('editar/{id}', [ServicosController::class, 'editarAction']); //Ação de edição

    Route::get('apagar/{id}', [ServicosController::class,'deletar'])->name('servicos.deletar'); //Ação de deletar

});

Route::fallback([HomeController::class, 'notFound']);
