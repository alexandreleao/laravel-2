@extends('layouts.produtos')

@section('title' , 'Edição de Produtos')

@section('content')

    <h1>Edição de Produtos</h1>

    @if(session('warning'))

       @alert
            {{session('warning')}}
       @endalert
       
    @endif

    <form method="post">
        @csrf

        <label for="">
            Titulo: <br/>
            <input type="text" name="titulo" value="{{ $data->titulo }}">
        </label>
            <input type="submit" value="Salvar">
    </form>

    @endsection