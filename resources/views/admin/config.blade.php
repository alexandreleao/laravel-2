@extends('layouts.admin')

@section('title', 'Configurações')
    
@section('content')

<h1>Configurações</h1>
   
    @alert 
       Alguma frase qualquer...
    @endalert

 <ul>
     @forelse($lista as $item)
     <li>{{$item['nome']}} - {{$item['qt']}}</li>
     @empty
        <li>Não há ingredientes</li>
    @endforelse
</ul>   

    <form method="POST">

       @csrf

        Nome:<br />
        <input type="text" name="nome" /><br />

        Idade: <br />
        <input type="text" name="idade" /><br />

        Cidade: <br />
        <input type="text" name="cidade" /><br />

    
        <input type="submit" value="Enviar">
    </form>


    <a href="/config/info">informações</a>

    @endsection