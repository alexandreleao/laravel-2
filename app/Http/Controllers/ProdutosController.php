<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutosController extends Controller
{
    public function listar()
    {
        $listar = DB::select('SELECT * FROM produtos');

        return view('produtos.listar',[
            'listar' => $listar
        ]);
    }

    public function adicionar()
    {
        return view('produtos.adicionar');
    }

    public function adicionarAction(Request $request)
    {
        if($request->filled('titulo')){
            $titulo = $request->input('titulo');

            DB::insert('INSERT INTO produtos(titulo) VALUES (:titulo)', [
                'titulo' => $titulo
            ]);

          

            return redirect()->route('produtos.listar');
        }else{
            return redirect()
            ->route('produtos.adicionar')
            ->with('warning','Você não preencheu o titulo!');

        }
    }

    public function editar($id)
    {
        $data = DB::select('SELECT * FROM produtos where id = :id', [
            'id' => $id
        ]);

        if(count($data) > 0){
           
                return view('produtos.editar',[
                    'data' => $data[0]
                ]); 
           }else{
               return redirect()->route('produtos.listar');
           }
    } 

    public function editarAction(Request $request, $id)
    {
        if($request->filled('titulo')){
            $titulo = $request->input('titulo');

            $data = DB::select('SELECT * FROM produtos where id = :id', [
                'id' => $id
            ]);
            if(count($data) > 0){
                DB::update('UPDATE produtos set titulo = :titulo where id = :id', [
                    
                    'titulo' => $titulo,
                    'id' => $id

                ]);
            }

            return redirect()->route('produtos.listar');
        }else{
            return redirect()
            ->route('produtos.editar', ['id'=>$id])
            ->with('warning', 'Você não preencheu o titulo!');
        }
    }

    public function deletar($id)
    {   
        DB::delete('DELETE FROM produtos where id = :id', [
            'id' => $id
        ]);
        return redirect()->route('produtos.listar');
    }

    public function done($id)
    {
        DB::update('UPDATE produtos SET concluido = 1 - concluido WHERE id = :id', [
            'id' => $id
        ]);
        return redirect()->route('produtos.listar');
    }
}
