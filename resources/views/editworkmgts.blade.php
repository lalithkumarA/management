@extends('layouts.app')
@extends('layouts.errors')
@section('content')
	<form action="/updated/{{$tan->id}}/Updated" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-7" for="name">Management Name:</label>
              <select id="name" name="name" class="form-control" class="control-label col-sm-7">
                  <option value="">--- Select Management ---</option>
                  @foreach($mgts as $mgt)
                    <option value="{{$mgt->id}}" <?php if($tan->name==$mgt->id){ echo 'selected';} ?> >{{ $mgt->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="mobile">Mobile:</label>
              <div class="col-sm-10">          
                <input type="text" value="{{$tan->mobile}}" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="detail">Detail:</label>
              <div class="col-sm-10">          
                <input type="text" value="{{$tan->detail}}" class="form-control" id="detail" placeholder="Enter detail" name="detail">
            </div>
      <button type="submit" class="btn btn-primary">Update</button>    
    </form>

@endsection