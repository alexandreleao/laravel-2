@if($errors->any())

    @foreach($errors->all() as $error)
        <h4 class="alert alert-danger">{{$error}}</h4>
    @endforeach   

@endif
