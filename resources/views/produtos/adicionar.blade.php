@extends('layouts.default')

@section('title', 'Adicionar Produto')

@section('content')
<h1>Adicionar Novo Produto</h1>
    @include('produtos.form-produtos', ['produto' => null])
@endsection
