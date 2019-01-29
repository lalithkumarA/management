@extends('layouts.app')
@extends('layouts.errors')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Management Name</th>
      <th>Mobile</th>
      <th>Detail</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($tan as $mgtsworks)   
    <tr>
      <td>{{ $mgtsworks->id }}</td>
      <td>{{ $mgtsworks->mgt->name }}</td>
      <td>{{ $mgtsworks->mobile }}</td>
      <td>{{ $mgtsworks->detail }}</td>
      <td>
        <a class="btn btn-info" href="/updated/{{ $mgtsworks->id}}/editworkmgts">Edit</a>
        <a class="btn btn-danger" href="/deleted/{{ $mgtsworks->id}}/deleted">Delete</a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
<center><a class="btn btn-primary" href="{{ url('/home') }}"> Home</a></center>
@endsection