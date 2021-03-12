@if($error->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
               <h4 class="text-danger">{{$errors->first()}}</h4>
        @endforeach
    </ul>
</div>
@endif