<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class HomeController extends Controller
{
    public function index()
    {
        $titulo = "TITULO DE TESTE";
        $vidros = ["brindex", "transparentes", "fantasia"];

        //view('layouts.default', ['frutas' => implode(",", $frutas)]);

        return view('index', [
            'titulo' => $titulo,
            'vidros' => $vidros
        ]);
    }
}
