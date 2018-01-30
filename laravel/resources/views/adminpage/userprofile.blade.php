@extends('adminpage')
@section('content')
<div class="content-page">
<div class="content">
    <h1>Edit Profile</h1>
  	<hr>

    <div class="row">
      <!-- left column -->
      {{--  <div class="col-md-3" style = "margin: auto">
        <div class="text-center">
          <img src="//placehold.it/100" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control" name = "avatar" accept=".jpg, .jpeg, .png">
        </div>
      </div>  --}}
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        
        <form class="form-horizontal" role="form" action = "updateinfo" method = "POST" enctype="multipart/form-data">
            {!! csrf_field() !!}
           <div class = "col-md-3">
              <div class="text-center">
                  <img src="//placehold.it/100" class="avatar img-circle" alt="avatar" >
                  <h6>Upload a different photo...</h6>
                  
                  <input type="file" class="form-control" name = "avatar" accept=".jpg, .jpeg, .png">
                </div>
           </div>
           <div class = "col-md-9">
          <div class="form-group">
              @if($errors->has('name'))
              <div class="alert alert-danger">
                  <strong>{{ $errors->first('name') }}</strong>
              </div>
              @endif
            <label class="col-lg-3 control-label">Full Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name = "name" require>
            </div>
          </div>
          <div class="form-group">
              @if($errors->has('email'))
              <div class="alert alert-danger">
                  <strong>{{ $errors->first('email') }}</strong>
              </div>
              @endif
            <label class="col-lg-3 control-label">Email Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name = "email" require>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender:</label>
            <div class="col-lg-8">
            <div class="ui-select">
                <select class="form-control" style="padding:0; height:35px" name = "gender">
                    <option value="male">Male</option>
                   <option value="female">Female</option>
                </select>
            </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Role:</label>
            <div class="col-lg-8">
              <div class="ui-select">
                <select class="form-control" style="padding:0; height:35px" name = "role">
                  <option value="0">Member</option>
                  <option value="1">Admin</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
              @if($errors->has('phone'))
              <div class="alert alert-danger">
                  <strong>{{ $errors->first('phone') }}</strong>
              </div>
              @endif
            <label class="col-md-3 control-label">Phone:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name = "phone" require>
            </div>
          </div>
          <div class="form-group">
              @if($errors->has('address'))
              <div class="alert alert-danger">
                  <strong>{{ $errors->first('address') }}</strong>
              </div>
              @endif
                <label class="col-lg-3 control-label">Address:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" name = "address" require>
                </div>
              </div>
          <div class="form-group">
              @if($errors->has('password'))
              <div class="alert alert-danger">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
              @endif
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name = "password" require >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name = "password_confirmation" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </div>
        </form>
      </div>
  </div>
</div>
</div>

<hr>
@endsection