@extends('layouts.default')

@section('title', 'Adicionar Produto')

@section('content')
<h1></h1>
@include('produtos.form-produtos', ['produto' => null])
@endsection
