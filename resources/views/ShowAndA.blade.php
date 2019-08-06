    <h1>user_name is {{auth::id()}} answers of {{$o->content}}  are
    </h1>
    @foreach($o->answer as $ans)
        <h3> its id is {{$ans->id}} and its content is {{$ans->content}} </h3>
        @endforeach


<form method="post" action="/answers/store/">
    @csrf
{{--    <input type="hidden" value="{{auth::id()}}" name="user_id">--}}
    <input type="hidden" value="1" name="user_id">
    <input type="hidden" name = 'question_id' value = '{{$o->id}}'>
    <textarea rows="4" cols="50" name="conten" placeholder="Enter your answer !">
</textarea>
    <input type="submit" name="save" placeholder="save">
</form>
