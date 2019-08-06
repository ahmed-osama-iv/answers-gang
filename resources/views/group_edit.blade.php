@extends('layouts/master')

@section('content')

    <form method="post" action="/groups/update/{{$group->id}}">
        @method('put')
        @csrf
        <input type="text" name="name" value="{{$group->name}}">
        <input type="text" name="description" value="{{$group->description}}">
        <input type="submit" value="Save">
    </form>

@endsection