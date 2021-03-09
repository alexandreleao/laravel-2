<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index()
    {
        return view('config');
    }

    public function info()
    {
    
      echo "<h1>Configurações INFO 3</h1>";
    }

    public function permissoes()
    {
        echo "<h1>Configurações Permissões 3</h1>";
    }
}
