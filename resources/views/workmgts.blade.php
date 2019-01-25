@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="form2" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-7" for="name">Management Name:</label>
              <select id="name" name="name" class="form-control">
                  <option value="">--- Select Management ---</option>
                  @foreach($mgts as $mgt)
                    <option value="{{$mgt->id}}"><!-- <?php if($mgt->name==$mgt->id){ echo 'selected';} ?> -->{{ $mgt->name }}</option>
                  @endforeach        
              </select>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="customerform">Mobile:</label>
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
              </div>
            </div>
        </form>  
    </div>
@endsection
