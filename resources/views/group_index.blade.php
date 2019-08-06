@extends('layouts/master')

@section('content')

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">
      Actions
      <a class="btn btn-success ml-4" href="/groups/create">Add</a>
      </th>
    </tr>
  </thead>
  <tbody>

    @foreach($groups as $g)
        <tr>
            <th scope="row">{{$g->id}}</th>
            <td>{{$g->name}}</td>
            <td>{{$g->description}}</td>
            <td>
                <a class="btn btn-primary" href='/groups/edit/{{$g->id}}'>Edit</a> |
                <form style="display:inline;" action='/groups/delete/{{$g->id}}' method='post'>
                    @method('delete')
                    @csrf
                    <input value="Delete" type='submit' class="btn btn-danger" > | 
                </form>
                <a class="btn btn-success" href='join/{{$g->id}}'>Join</a> | 
                <a class="btn btn-warning" href=''>I'm an Admin</a>
            </td>
        </tr>
    @endforeach
    
  </tbody>
</table>
@endsection