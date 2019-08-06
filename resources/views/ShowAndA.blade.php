    <h1>answers of {{$o->content}}  are {{$o->answer->first->id}}</h1>


<form method="post" action="/store_">
    @csrf
    <input type="hidden" name = 'question_id' value = '{{$o->id}}'>
    <textarea rows="4" cols="50" name="conten" placeholder="Enter your answer !">
</textarea>
    <input type="submit" name="save" placeholder="save">
</form>
