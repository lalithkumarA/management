@extends('layouts.app')
@extends('layouts.errors')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Management Name</th>
      <th>Customer Form</th>
      <th>Detail</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
 @foreach($mgts as $mgt)   
  <tr>
    <td>{{ $mgt->id }}</td>
    <td>{{ $mgt->name }}</td>
    <td>{{ $mgt->customerform }}</td>
    <td>{{ $mgt->detail }}</td>
    
    <td><a class="btn btn-info" href="/update/{{ $mgt->id}}/edit">Edit</a></td>
    <td><a class="btn btn-danger" href="/delete/{{ $mgt->id}}/delete">Delete</a></td>
  </tr>
@endforeach
  </tbody>
</table>
@endsection