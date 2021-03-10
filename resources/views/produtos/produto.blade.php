@extends('layouts.default')

@section('title', 'nome do produto')

@section('content')
<section class="card">
    <div class="card-body">
        <div class="card-title">
            <h1>{{$produto->titulo}}</h1>
            <p>{{$produto->descricao}}</p>

            <a class="btn btn-link">
                Editar
            </a>
            <a class="btn btn-link text-danger">
                Apagar
            </a>
        </div>
    </div>
</section>
@endsection
