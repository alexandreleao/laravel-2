<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    public function index()
   {
      // $titulo = "TITULO DE TESTE";
      //  $vidros = ["brindex", "transparentes", "fantasia"];

        //view('layouts.default', ['frutas' => implode(",", $frutas)]);

        //return view('index', [
           // 'titulo' => $titulo,
            //'vidros' => $vidros
        //]);
    }

    public function listar()
    {
        $servicos = Servico::all();

        return view('servicos.listar', [
            'servicos' => $servicos
        ]);
    }

    public function notFound()
    {
        return view('404');
    }
}
