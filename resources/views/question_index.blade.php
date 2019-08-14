@extends('layouts/master/master')

@section('content')

  
  <div class="container">
   <div class="text-container ">
     <span>Top Questions</span> 
   </div>
   <div class="br"></div>
   <div class="br"></div>
  
      <div class="questions">

        @foreach($qs as $o)
        
            <div class="question">
            <a href="/questions/show/{{$o->id}}" ><div class="contet-question">{{$o->title}}</div>
              <div class="vote">
                
               
             
              @can('viewAny', App\Question::class)
               <a href="/questions/edit/{{$o->id}}" class="btn btn-primary">edit</a>
            <a href="/querstions/delete/{{$o->id}}" class="btn btn-danger">delete</a>
            @endcan
            <h6 style="position: relative; left : 90%">by : {{ \App\User::find($o->publisher_id)->name }}</h6>
              </span>
             </div>

              

             </a>
           </div>
           <div class="br black"></div>
        @endforeach





       
             <div class="br black"></div>
             
             <a  href="#modal2" class=" ask btn purple darken-4 modal-trigger">Ask Question now</a>
             
             
             
    </div>
 
  </div>



  

    
    <div id="modal2" class="modal">
      <form method="post" action="/querstions/store/">
      @csrf
      <input type="hidden" value="{{auth::id()}}" name="publisher_id">
        <div class="modal-content">
          <h2 style="text-align: center">You can post your Question here</h2>
          <div class="container">
            <p class="titleTextArea">Write title of your question here please! </p>
              <input  type="text" name="title" placeholder="Write title of you question"> 
          <textarea id="froala-editor" name="conten"></textarea>
          <div class="hamada"></div>

        
        </div>
        </div>
      
        <div class="answer">
            @auth()
              <input type="submit" name="save" class="btn right purple darken-4 askmodal" value="Ask!">
            @else
              <input type="button" onclick="M.toast({html: 'please login first'})" name="save" class="btn right purple darken-4 askmodal" value="Ask!">
            @endauth
        </div>
      </form>
      </div>



    

@endsection