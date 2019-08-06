@extends('layouts/master')

@section('content')

<form method="get" action="store">
    @csrf
    <input type="text" name="name">
    <input type="text" name="description">
    <input type="submit" value="Save">
</form>

@endsection
