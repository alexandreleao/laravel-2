@extends('layouts.default')

@section('title', 'Adicionar Servicos')

@section('content')
<h1>Adicionar Novo Serviço</h1>
    @include('servicos.form-servicos', ['servico' => null])
@endsection
