<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    public function index()
    {
        $titulo = "TITULO DE TESTE";
        $frutas = ["maça", "morango", "pera"];

        //view('layouts.default', ['frutas' => implode(",", $frutas)]);

        return view('index', [
            'titulo' => $titulo,
            'frutas' => $frutas
        ]);
    }
    public function notFound()
    {
        return view('404');
    }
}
