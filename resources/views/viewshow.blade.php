@extends('layouts.app')
@extends('layouts.errors')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Mobile</th>
      <th>Detail</th>
      <th>Management Name</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
  @foreach($tan as $mgtsworks)   
    <tr>
      <td>{{ $mgtsworks->id }}</td>
     <td>{{ $mgtsworks->mobile }}</td>
      <td>{{ $mgtsworks->detail }}</td>
       <td>{{ $mgtsworks->mgt->name }}</td>
      <!-- 
      <td><a class="btn btn-info" href="/update/{{ $mgtsworks->id}}/edit">Edit</a></td>
      <td><a class="btn btn-danger" href="/delete/{{ $mgtsworks->id}}/delete">Delete</a></td> -->
    </tr>
  @endforeach
  </tbody>
</table>
@endsection