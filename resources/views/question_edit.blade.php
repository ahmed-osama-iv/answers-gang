@extends('layouts/master/master')

@section('content')
  <div class="container">
<form method="post" action ='/questions/update/{{$o->id}}'>
    @csrf
    @method('PUT')
    <p class="titleTextArea">Write title of your question here please! </p>
    <input type="text" name="title" value="{{$o->title}}">
  <textarea id="froala-editor" name="conten" class="mt-4">{{$o->content}}</textarea>
  <div class="hamada"></div>
  <div class="answer">
  </div>

  
  <div class="answer">
    <div class="hamada"></div>
    <input type = 'submit' class="btn right purple darken-4 save" value="Save">   
  </div>
</form>
</div>

@endsection
