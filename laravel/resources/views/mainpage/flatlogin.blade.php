@extends('master')
@section('content')
<link href="{{ URL::asset('css/styleUI.css')}}" type="text/css" rel="stylesheet" media="all">
<div class="main-agileits">
    <h1>Tiny Ui Login Form</h1>
    <div class="mainw3-agileinfo">
        <!-- login form -->
        <div class="login-form">  
            <div class="login-agileits-top"> 	
                <form action="login" method="post"> 
                    {!! csrf_field() !!}
                    <p>Username </p>
                    <input id="username" type="text" class="name" name="username" placeholder="Username" required=""/>
                    <p>Password</p>
                    <input id="password" type="password" class="password" name="password" placeholder=".........." required=""/>  
                    <label class="anim">
                        <input type="checkbox" class="checkbox" name = "remember">
                        <span>&nbsp;Remember me ?</span> 
                    </label>   
                    <input type="submit" value="Login"> 
                </form> 	
            </div> 
            <div class="login-agileits-bottom"> 
                <h6><a href="#">Forgot password?&nbsp;</a></h6>
                <h6> Or </h6>
                <h6><a href="register">Register &nbsp;</a></h6>
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
</script>
@endsection