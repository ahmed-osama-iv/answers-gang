@extends('layouts/master/master')

@section('content')

    <h1>user_name is {{auth::id()}}</h1><br>
    Group Name : {{$group->name}}<br>
    Group Description : {{$group->description}}<br>
    
    <br><br>

    @foreach($group->question as $quest)
        Question ID : {{$quest->id}}<br>
        Question Content : {{$quest->content}}<br>
        -------------------------------------------------<br>
    @endforeach


@endsection