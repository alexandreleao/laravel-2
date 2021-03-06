<form action="{{route('produtos.adicionar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Titulo: </label>
            <input class="form-control" type="text" id="title" name="titulo"
                value="{{ $produto ? $produto->titulo : ''  }}">
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea class="form-control" type="text" id="description" name="descricao">{{ $produto ? $produto->descricao : '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="formFileLg" class="form-label">Produto:</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="imagem"
             value="{{$produto ? $produto->imagem : ''}}">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

@include('components/show-errors', ['errors' => $errors])
