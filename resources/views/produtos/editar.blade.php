@extends('layouts.default')

@section('title' , ['title' => $title])

@section('content')
<h1>{{$title}}</h1>
@include('produtos.from-produtos', ['produto'=> $produto])
@endsection
