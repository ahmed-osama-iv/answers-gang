@extends('layouts/master/master')

@section('content')
  
<form method="post" action ='/answers/update/{{$o->id}}'>
    @csrf
    @method('PUT')

  <textarea id="froala-editor" name="conten" class="mt-4">{{$o->content}}</textarea>
  <div class="hamada"></div>
  <div class="answer">
  </div>

  
  <div class="answer">
    <div class="hamada"></div>
    <input type = 'submit' class="btn right purple darken-4" value="Save">   
  </div>
</form>


@endsection
