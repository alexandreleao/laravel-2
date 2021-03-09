@extends('layouts.produtos')


@section('title', 'Listagem de Produtos')

@section('content')
<h1>Listagem de Produtos</h1>

<a href="{{route('produtos.adicionar')}}">Adicionar Novo Produto</a>
@if(count($listar) > 0)
    <ul>
        @foreach($listar as $item)
        <li>
            <a href="{{route('produtos.done',['id'=>$item->id])}}"> [ @if($item->concluido===1) desmarcar @else marcar @endif ]</a>
              {{$item->titulo}}
            <a href="{{ route('produtos.editar', ['id'=>$item->id])}}"> [ editar ]</a>
            <a href="{{ route('produtos.deletar', ['id'=>$item->id])}}" onclick="return confirm('Tem certeza que deseja excluir?')">[ excluir ]</a>
        </li>
        @endforeach
    </ul>
    @else
    Não há item cadastrado!
    @endif
@endsection