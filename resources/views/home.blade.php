@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="form" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-sm-7" for="name">Management Name:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="customerform">Customer Form:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="customerform" placeholder="Enter customerform" name="customerform">
              </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-7" for="detail">Detail:</label>
              <div class="col-sm-10">          
                <input type="text" class="form-control" id="detail" placeholder="Enter detail" name="detail">
              </div>
            </div>
            <div class="form-group">
                <label for="designation">Designation:</label>
                <select id="designation" name="designation" class="form-control">

                   
                </select>                
            </div>
            <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </div>
        </form>  
    </div>
@endsection
