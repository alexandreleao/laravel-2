@extends('layouts.default')

@section('content')

PAGINA DE INICIO: <h1>{{$titulo}}</h1>


<ul class="list-group">
    @foreach ($frutas as $fruta)
    <li class="list-group-item">{{$fruta}}</li>
    @endforeach
</ul>


@endsection
