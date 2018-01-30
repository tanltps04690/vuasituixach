@extends('master')
@section('content')
<link href="{{ URL::asset('css/styleUI.css')}}" type="text/css" rel="stylesheet" media="all">
<div class="main-agileits">
    <h1>Tiny Ui Login Form</h1>
    <div class="mainw3-agileinfo">
        <!-- login form -->
        <div class="login-form">  
            <div class="login-agileits-top"> 	
                <form action="register" method="post"> 
                        {!! csrf_field() !!}
                     @if($errors->has('name'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('name') }}</strong>
                    </div>
                    @endif
                    <p>Full Name </p>
                    <input id="fullname" type="text" class="name" name="name" placeholder="Full Name" required=""/>
                    @if($errors->has('email'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    @endif
                    <p>Email </p>
                    <input id="email" type="text" class="name" name="email" placeholder="Email" required=""/>
                    @if($errors->has('username'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('username') }}</strong>
                    </div>
                    @endif
                    <p>Username </p>
                    <input id="username" type="text" class="name" name="username" placeholder="Username" required=""/>
                    @if($errors->has('password'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                    @endif
                    <p>Password</p>
                    <input id="password" type="password" class="password" name="password" placeholder=".........." required=""/> 
                    <p>Confirm Password </p>
                    <input id="password_confirmation" type="password" class="name" name="password_confirmation" placeholder=".........." required=""/>
                    @if($errors->has('address'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('address') }}</strong>
                    </div>
                    @endif
                    <p>Address </p>
                    <input id="address" type="text" class="name" name="address" placeholder="Address" required=""/>
                    @if($errors->has('phone'))
                    <div class="alert alert-danger">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </div>
                    @endif
                    <p>Phone </p>
                    <input id="phone" type="text" class="name" name="phone" placeholder="Phone" required=""/>
                    
                    {{--  <label class="anim">
                        <input type="checkbox" class="checkbox">
                        <span>&nbsp;Remember me ?</span> 
                    </label>     --}}
                    <input type="submit" value="Register"> 
                </form> 	
            </div> 
            <div class="login-agileits-bottom"> 
                <h6><a href="#">Forgot password?</a></h6>
            </div>  
            <div class="social-w3lsicon">
                <a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
                <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a> 
                <a href="#" class="social-button drble"><i class="fa fa-dribbble"></i></a> 
                <a href="#" class="social-button be"><i class="fa fa-behance"></i></a> 
                <a href="#" class="social-button in"><i class="fa fa-linkedin"></i></a> 
            </div>  

        </div> 
    </div>	
</div>	
<!-- //main -->
<!-- copyright -->
<div class="w3copyright-agile">
    <p>© 2017 Tiny Ui Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
</div>
<!-- //copyright -->
<!-- js -->  
<script src="js/superplaceholder.js"></script>
<script>
superplaceholder({
        el: username,
        sentences: [ 'Tan.Le25', 'Letrongtan.25', 'example@name2' ],
        options: {
            loop: true,
            startOnFocus: false
        }
    })
    superplaceholder({
        el: password,
        sentences: [ '.........', '........', '..............' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
    superplaceholder({
        el: password_confirmation,
        sentences: [ '.........', '........', '..............' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
    superplaceholder({
        el: email,
        sentences: [ 'tanlt3@fsoft.com.vn', 'tanltps04690@fpt.edu.vn', 'name@domain.com' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
    
    superplaceholder({
        el: address,
        sentences: [ 'You Address', 'Hoằng Thắng - Hoằng Hóa - Thanh Hóa', 'Tăng Nhơn Phú A, Quận 9, TP.Hồ Chí Minh' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
    superplaceholder({
        el: phone,
        sentences: [ 'Your Number Phone', '0972685031', '+84972685031' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
    superplaceholder({
        el: fullname,
        sentences: [ 'Le Trong Tan', 'Lê Trọng Tân', 'Nguyen Thi A' ],
        options: {
            loop: true,
            startOnFocus: false 
        }
    })
</script>
@endsection