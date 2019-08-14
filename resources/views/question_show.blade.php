@extends('layouts/master/master')

@section('content')

  <div class="container">
      <div class="question" style="font-size:40px; background-color:#ae6bf2 !important;">
        @if(isset($o->content))

          <div class="title-question" ">{{$o->title}}</div>
          <div class="br" style="background: black ; margin: 20px 0px"></div>
          <div class="contet-question" id = "ihab-data-question" > {{$o->content}}</div>
        
            <div class="vote">
              <a onclick="M.toast({html: 'Vote Up'})" href="/questions/voteup/{{$o->id}}" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
              <a onclick="M.toast({html: 'Vote Down'})" href="/questions/votedown/{{$o->id}}" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
              <br><br>{{$o->score}}<br>
              @can('viewAny', \App\Question::class)
                <a href="/questions/edit/{{$o->id}}" class="btn btn-primary">edit</a>
                <a href="/querstions/delete/{{$o->id}}" class="btn btn-danger">delete  </a>
              @endcan
              <h6>by : {{ \App\User::find($o->publisher_id)->name }}</h6>
           </div>

           </a>
           
         </div>
         @endif
         
         @foreach($o->answer as $ans)
         <div class="question">
         <p style="position: relative; left: 90%; top:200px">
          <div class="contet-question" id = "ihab-data-answer">{{$ans->content}}</div>
            <div class="vote">
              <a onclick="M.toast({html: 'Vote Up'})"  href="/answers/voteup/{{$ans->id}}" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
              <a onclick="M.toast({html: 'Vote Down'})"  href="/answers/votedown/{{$ans->id}}" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
              {{$ans->score}}
              @can('viewAny', \App\Question::class)
              <a href="/answers/edit/{{$ans->id}}" class="btn btn-primary">edit</a>
              <a href="/answers/delete/{{$ans->id}}" class="btn btn-danger">delete</a>
              @endcan
              
              <h6 style="position: relative; left : 90%">by : {{\App\User::find($ans->publisher_id)->name}}</h6>
           </div>
           </a>
         </div>
         @endforeach

<form method="post" action="/answers/store/">
      @csrf
      <input type="hidden" value="{{auth::id()}}" name="publisher_id">
        <!-- <input type="hidden" value="1" name="user_id"> -->
        <input type="hidden" name = 'question_id' value = '{{$o->id}}'>

      <textarea id="froala-editor" name="conten"></textarea>
      <div class="hamada"></div>
      <div class="answer">
        
      @auth()
        <input type="submit" name="save" class="btn right purple darken-4" value="save">
      @else
      <input type="button" onclick="M.toast({html: 'please login first'})" name="save" class="btn right purple darken-4 askmodal" value="Ask!">
      @endauth
      </div>
  </form>
    
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>

var elements = document.getElementsByClassName("contet-question");

$.each( elements, function( key, value ) {
  var temp = value.textContent ; 
  value.innerHTML= temp;
  console.log(temp);
});





</script>



@endsection