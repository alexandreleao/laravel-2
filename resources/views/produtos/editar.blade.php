@extends('layouts.default')

@section('title' , 'Editar Produto')

@section('content')
<section class="card">
    <div class="card-body">
        <h1 class="card-title">Editar Produto</h1>
        @include('produtos.form-produtos', ['produto'=> $produto])
    </div>
</section>

@endsection
