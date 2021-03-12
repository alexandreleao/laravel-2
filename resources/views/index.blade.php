@extends('layouts.default')

@section('content')

PAGINA DE INICIO: <h1>{{$titulo}}</h1>


<ul class="list-group">
    @foreach ($vidros as $vidro)
    <li class="list-group-item">{{$vidro}}</li>
    @endforeach
</ul>


@endsection
