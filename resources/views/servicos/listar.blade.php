@extends('layouts.default')


@section('title', 'Listagem de Serviços')

@section('content')
<section>
    <h1>Listagem de Serviços</h1>
    <a class="btn btn-link" href="{{ route('servicos.adicionar')}} ">Adicionar</a>
    <div>
        @foreach ($servicos as $servico)
        <div class="card">
            <div class="card-body">
            <h5 class="card-title">{{$servico->tipo}}</h5>
            <a class="card-link" href="{{route('servicos.visualizar', ['id'=> $servico->id])}}">
                Visualizar
            </a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
