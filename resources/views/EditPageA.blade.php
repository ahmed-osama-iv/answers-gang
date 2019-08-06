<form method="post" action ='/answers/update/{{$o->id}}'>
    @csrf
    @method('PUT')
    <input type="text" name="conten" value="{{$o->content}}">
    <input type = 'submit'>
</form>
