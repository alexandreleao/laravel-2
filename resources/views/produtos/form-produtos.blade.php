<form method="post">
    @csrf
    <div class="form-group">
        <label for="title">Titulo: </label>
            <input class="form-control" type="text" id="title" name="titulo"
                value="{{ $produto ? $produto->titulo : ''  }}">
    </div>
    <div class="form-group">
        <label for="description"></label>
        <textarea class="form-control" type="text" id="description"
                name="descricao" value="{{ $produto ? $produto->descricao : '' }}"></textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="submit">Salvar</button>
    </div>
</form>

@include('components/show-errors', ['errors' => $errors])
