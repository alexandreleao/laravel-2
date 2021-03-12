@extends('layouts.default')

@section('title', 'nome do produto')

@section('content')
<section class="card">
    <div class="card-body">
        <div class="card-title">
            <h1>{{$produto->titulo}}</h1>
            <p>{{$produto->descricao}}</p>
            <img width="300" height="200" src="{{$produto->imagem}}">
            <a class="btn btn-link text-danger" href="{{route('produtos.editar', $produto->id)}}">
                Editar
            </a>
            <a class="btn btn-link text-danger" href="{{route('produtos.deletar', $produto->id)}}">
                Apagar
            </a>
        </div>
    </div>
</section>
@endsection
