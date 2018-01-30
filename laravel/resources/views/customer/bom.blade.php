@extends('adminpage')
@section('content')
<link href="{{ URL::asset('css/colorpicker.css')}}" rel="stylesheet" type="text/css">
<script src="{{URL::asset('js/jscolor.js')}}"></script>
<div class="content-page">
<div class="content">
    <h1>Add</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      {{--  <div class="col-md-3" style = "margin: auto">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control" name ="cheat_img">
        </div>
      </div>  --}}
      
      <!-- edit form column -->
      <div class="col-md-12 personal-info">
      
        <h3>Personal info</h3>
        
        <form role="form" action = "addcheat" method="POST">
            {!! csrf_field() !!}


            <div class = "col-md-3">
              
                <div class="text-center">
                    <img src="//placehold.it/100" class="avatar img-circle" alt="avatar" >
                    <h6>Upload a different photo...</h6>
                    
                    <input type="file" class="form-control" name = "avatar" accept=".jpg, .jpeg, .png" required>
                  </div>
             </div>
             
          


          <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name = "cheat_name" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" >Phone:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name = "cheat_phone" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" >Address:</label>
            <div class="col-lg-7">
              <input class="form-control" type="text" name ="cheat_address"required>
            </div>
          </div>
         
          <div class="form-group">
                <label class="col-lg-3 control-label">Description:</label>
                <div class="col-lg-7">
                  <textarea class="form-control" name="cheat_des" cols="40" rows="5"></textarea>
                </div>
              </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-4">
              <button class="btn btn-primary" type = "submit">Add</button>
              <span></span>
              
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
</div>

<hr>


@endsection