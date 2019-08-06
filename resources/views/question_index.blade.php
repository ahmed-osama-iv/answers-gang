@extends('layouts/master')

@section('content')

    @foreach($qs as $o)
        <h3>{{$o->id}} {{$o->content}}</h3>
        <a href="/questions/edit/{{$o->id}}" class="btn btn-primary">edit</a> <a href="/querstions/delete/{{$o->id}}" class="btn btn-danger">delete</a>
    @endforeach

@endsection