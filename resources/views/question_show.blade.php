@extends('layouts/master/master')

@section('content')

  <div class="container">
      <div class="question" style="font-size:40px; background-color:#ffef91;">
          <div class="contet-question">{{$o->content}}</div>
            <div class="vote">
              <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
              <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
              <a href="/questions/edit/{{$o->id}}" class="btn btn-primary">edit</a>
              <a href="/querstions/delete/{{$o->id}}" class="btn btn-danger">delete</a>
           </div>
           </a>
         </div>
         
         @foreach($o->answer as $ans)
         <div class="question">
          <div class="contet-question">{{$ans->content}}</div>
            <div class="vote">
              <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
              <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
              <a href="/answers/edit/{{$ans->id}}" class="btn btn-primary">edit</a>
              <a href="/answers/delete/{{$ans->id}}" class="btn btn-danger">delete</a>
           </div>
           </a>
         </div>
         @endforeach


  <textarea id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
  <div class="hamada"></div>
  <div class="answer">
    <a href="write.html" class="btn right purple darken-4">Answer!</a>
  </div>

</div>



@endsection