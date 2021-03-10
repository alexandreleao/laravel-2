@extends('layouts.default')


@section('title', 'Listagem de Produtos')

@section('content')
<section>
    <h1>Listagem de Produtos</h1>
    <a class="btn btn-link" href="{{ route('produtos.adicionar')}} ">Adicionar</a>
    <div>
        @foreach ($produtos as $produto)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$produto->titulo}}</h5>
            <a class="card-link" href="{{route('produtos.visualizar', ['id'=> $produto->id])}}">
                Visualizar
            </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
