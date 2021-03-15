<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicosController extends Controller
{
    public function listar()
    {
        $servicos = Servico::all(); //Select * From

        return view('servicos.listar',[
              'servicos' => $servicos  
        ]);
    }

    public function visualizar($id)
    {
        $servico = Servico::find($id); // SELECT * FROM servicos where id = 1

        return view('servicos.servico', [
            'servico' => $servico
        ]);
    }

    public function adicionar()
    {
        return view('servicos.adicionar');
    }

    public function adicionarAction(Request $request)
    {
        $validated = $request->validate([
            'tipo' => 'required',
            'descricao' => 'required',
            'imagem' => 'required'

        ]); 
     

        $servico = new Servico;

        $servico->tipo = $request->tipo;
        $servico->descricao =$request->descricao;


        if($servico->save()){
            return redirect()->route('servicos.listar');
        }
        return back()->withErrors([
            "Não foi possível criar um novo serviço"
        ]);
       
    }

    public function editar($id)
    {
        $servico = Servico::find($id);

        return view('servicos.editar', ['servicos' => $servico]);
    }

    public function editarAction(Request $request, $id)
    {
        $servico = Servico::find($id);

        $servico->tipo = $request->tipo;
        $servico->descricao = $request->descricao;

        if ($request->hasFile("imagem")) {
            $path = $request->imagem->store("public/images");
            $imagem = Storage::url($path);
            $servico->imagem = $imagem ? $imagem : null;
        }


        if ($servico->save()) {
            return redirect()->route('servicos.visualizar', ['id' => $servico->id]);
        }
    }

    public function deletar($id)
    {
        $produto = Servico::find($id);

        if ($produto->delete()) {
            return redirect()->route('servicos.listar');
        }

        return back()->withErrors(
            "Não foi possível deletar o servicos"
        );
    }



}
