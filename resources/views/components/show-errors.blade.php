@if($errors->any())
@alert
    @foreach($erros->all() as $error)
        <h4 class="text-danger">{{$errors->first()}}</h4>
    @endforeach   
 @endalert   
@endif
