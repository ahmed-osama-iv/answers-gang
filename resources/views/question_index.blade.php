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
            <h3>{{$o->id}}</h3>
            

            <div class="question">
            <a href="/questions/show/{{$o->id}}" ><div class="contet-question">{{$o->content}}</div>
              <div class="vote">
                <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
                <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
               <span class="answer">
               <a href="#modal1" class="btn  purple darken-4 modal-trigger">Answer!</a>

               <a href="/questions/edit/{{$o->id}}" class="btn btn-primary">edit</a>
            <a href="/querstions/delete/{{$o->id}}" class="btn btn-danger">delete</a>
              </span>
             </div>

              

             </a>
           </div>
           <div class="br black"></div>
        @endforeach





           <div class="question">
              <a href="write.html" ><div class="contet-question">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores earum cumque atque, recusandae repudiandae voluptas aliquam officia quibusdam aliquid possimus enim quod eligendi hic ex, architecto explicabo commodi repellendus voluptates.</div>
                <div class="vote">
                  <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 ">
                    <i class="fas fa-thumbs-up"></i></a>
                  <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="fas fa-thumbs-down"></i></a>
                 <span class="answer">
                 <a href="#modal1" class="btn  purple darken-4 modal-trigger">Answer!</a>
                </span>
               </div>
               </a>
             </div>
             <div class="br black"></div>
             <a  href="#modal2" class=" ask btn purple darken-4 modal-trigger">Ask Question now</a>
    </div>
 
  </div>



  <div id="modal1" class="modal">
      <div class="modal-content">
        <h2 style="text-align: center">You can give your own answer</h2>
        <div class="container">
            <div class="question">
                <a href="write.html" ><div class="contet-question">{{$o->content}}</div>
                  <div class="vote">
                    <a onclick="M.toast({html: 'Vote Up'})" class="btn purple darken-4 "><i class="far fa-thumbs-up"></i></a>
                    <a onclick="M.toast({html: 'Vote Down'})" class="btn purple darken-4 "><i class="far fa-thumbs-down"></i></a>
                   
                 </div>
                 </a>
               </div>
        <textarea id="froala-editor" ></textarea>
        <div class="hamada"></div>
        <div class="answer">
          <a href="#" class="btn right purple darken-4">Answer!</a>
        </div>
      
      </div>
      </div>
    
    </div>

    <div id="modal2" class="modal">
        <div class="modal-content">
          <h2 style="text-align: center">You can post your Question here</h2>
          <div class="container">
              
          <textarea id="froala-editor">Initialize the Froala WYSIWYG HTML Editor on a textarea.</textarea>
          <div class="hamada"></div>
          <div class="answer">
            <a href="#" class="btn right purple darken-4">Answer!</a>
          </div>
        
        </div>
        </div>
      
      </div>


    

@endsection