<form action="{{route('servicos.adicionar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Tipo: </label>
            <input class="form-control" type="text" id="title" name="tipo"
                value="{{ $servico ? $servico->tipo : ''  }}">
    </div>

    <div class="form-group">
        <label for="description">Descrição:</label>
        <textarea class="form-control" type="text" id="description" name="descricao">{{ $servico ? $servico->descricao : '' }}</textarea>
    </div>

    <div class="form-group">
        <label for="formFileLg" class="form-label">Imagem:</label>
        <input class="form-control form-control-lg" id="formFileLg" type="file" name="imagem"
             value="{{$servico ? $servico->imagem : ''}}">
    </div>

    <div class="form-group">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

@include('components/show-errors', ['errors' => $errors])
