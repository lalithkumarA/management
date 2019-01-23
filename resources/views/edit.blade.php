@extends('layouts.app')
@extends('layouts.errors')
@section('content')
	<form action="/update/{{$mgts->id}}/Update" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-7" for="name">Management Name:</label>
              <div class="col-sm-10">
                <input type="text" value="{{$mgts->name}}" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="customerform">Customer Form:</label>
              <div class="col-sm-10">          
                <input type="text" value="{{$mgts->customerform}}" class="form-control" id="customerform" placeholder="Enter customerform" name="customerform">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="detail">Detail:</label>
              <div class="col-sm-10">          
                <input type="text" value="{{$mgts->detail}}" class="form-control" id="detail" placeholder="Enter detail" name="detail">
            </div>
      <button type="submit" class="btn btn-primary">Update</button>    
    </form>

@endsection