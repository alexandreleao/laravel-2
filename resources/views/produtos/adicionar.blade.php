@extends('layouts.produtos')

@section('title', 'Adicão de Produtos')

@section('content')

    <h1>Adição</h1>

    @if(session('warning'))

        @alert
            {{ session('warning') }}

        @endalert

    @endif

    <form method="post">

        @csrf

        <label for="">
            Titulo: <br/>
            <input type="text" name="titulo" />
        </label>
            <input type="submit" value="Adicionar">

    </form>

    @endsection
