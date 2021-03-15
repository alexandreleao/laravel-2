@extends('layouts.default')

@section('title' , 'Editar Servico')

@section('content')

<section class="card">
    <div class="card-body">
        <h1 class="card-title">Editar Serviços</h1>
        <form action="{{route('servicos.editar', $servico->id)}}" method="post" enctype="multipart/form-data">
           _method
             @include('servicos.form-servicos', ['servico'=> $servico])
        </form>
       
    </div>
</section>

@endsection
