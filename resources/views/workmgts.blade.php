@extends('layouts.app')

@section('content')

    <div class="container">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Click <a class="btn btn-primary" href="{{ url('/home') }}"> Home</a> Page</h2>
          </div>
      </div>
        <form action="form2" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-7" for="name">Management Name:</label>
              <select id="name" name="name" class="form-control">
                  <option value="">--- Select Management ---</option>
                  @foreach($mgts as $mgt)
                    <option value="{{$mgt->id}}"><?php if($mgt->name==$mgt->id){ echo 'selected';} ?>{{ $mgt->name }}</option>
                  @endforeach        
              </select>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="mobile">Mobile:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="detail">Detail:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="detail" placeholder="Enter detail" name="detail">
              </div>
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
                <a class="btn btn-primary" href="{{ url('/viewshow') }}"> Back</a>                
              </div>
            </div>
        </form>  
    </div>
@endsection
