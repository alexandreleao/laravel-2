@extends('layouts.default')

@section('title' , 'Editar Produto')

@section('content')

<section class="card">
    <div class="card-body">
        <h1 class="card-title">Editar Produto</h1>
        <form action="{{route('produtos.editar', $produto->id)}}" method="post" enctype="multipart/form-data">
           
             @include('produtos.form-produtos', ['produto'=> $produto])
        </form>
       
    </div>
</section>

@endsection
