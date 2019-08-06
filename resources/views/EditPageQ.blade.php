<form method="post" action ='/questions/update/{{$o->id}}'>
    @csrf
    @method('PUT')
    <input type="text" name="conten" value="{{$o->content}}">
    <input type = 'submit'>

</form>
