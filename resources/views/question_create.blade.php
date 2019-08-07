@extends('layouts/master/master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" action="/querstions/store/">
    @csrf
<input type="hidden" value="{{auth::id()}}" name="publisher_id">
<textarea rows="4" cols="50" name="conten" placeholder="Enter your question !">
</textarea>
    <input type="submit" name="save" placeholder="save">
</form>

@endsection