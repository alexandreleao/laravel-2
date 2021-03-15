@extends('layouts.default')

@section('content')

PAGINA DE INICIO: <h1>{{$titulo}}</h1>
 @include('components.navlogo')
 @include('layouts.nav')
 @include('components.slider')

<ul class="list-group">
    @foreach ($servicos as $servico)
    <li class="list-group-item">{{$servico}}</li>
    @endforeach
</ul>


@endsection
