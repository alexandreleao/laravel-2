@extends('layouts.default')

@section('title', 'nome do serviço')

@section('content')
<section class="card">
    <div class="card-body">
        <div class="card-title">
            <h1>{{$servico->tipo}}</h1>
            <p>{{$servico->descricao}}</p>
            <img src="{{$servico->imagem}}">
            <a class="btn btn-link text-danger" href="{{route('servicos.editar', $servico->id)}}">
                Editar
            </a>
            <a class="btn btn-link text-danger" href="{{route('servicos.deletar', $servico->id)}}">
                Apagar
            </a>
        </div>
    </div>
</section>
@endsection
