<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;



class ProdutosController extends Controller
{
    public function listar()
    {
        $produtos = Produto::all(); // SELECT * FROM produtos

        return view('produtos.listar',[
            'produtos' => $produtos
        ]);
    }
    public function visualizar($id)
    {
        $produto = Produto::find($id); // SELECT * FROM produtos where id = 1

        return view('produtos.produto', [
            'produto' => $produto
        ]);
    }

    public function adicionar()
    {
        return view('produtos.adicionar');
    }

    public function adicionarAction(Request $request)
    {

       $validated = $request->validate([
        'titulo' => 'required',
        'descricao' => 'required',
        'imagem' => 'required'

       ]);

        $produto = new Produto;

        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descricao;

        if($request->hasFile("imagem")){
         $path = $request->imagem->store("public/images");
         $imagem = Storage::url($path);
         $produto->imagem = $imagem ? $imagem : null;
        }

        if($produto->save()){
            return redirect()->route('produtos.listar');
        }

        return back()->withErrors([
            "Não foi possível criar um novo produto"
        ]);
    }

    public function editar($id)
    {
        $produto = Produto::find($id);

        return view('produtos.editar', ['produto'=>$produto]);
    }

    public function editarAction(Request $request, $id)
    {
        $produto = Produto::find($id);

        $produto->titulo = $request->titulo;
        $produto->descricao = $request->descricao;

        if($produto->save()){
            return redirect()->route('produtos.visualizar', ['id' => $produto->id ]);
        }

    }

    public function deletar($id)
    {
        $produto = Produto::find($id);

        if($produto->delete()){
            return redirect()->route('produtos.listar');
        }

        return back()->withErrors(
            "Não foi possível deletar o produto"
        );
    }


}
