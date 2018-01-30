@extends('master')
@section('content')
<div class="demo-2" id="home">
		<div id="large-header" class="large-header main-w3l" style="height: 575px;">
			<!-- header -->
			<div class="header">
				<nav class="navbar navbar-default">
					<div class="container">
						<div class="navbar-header navbar-left">
							<h1><a href="index.html">Trends<span>Fashion Style</span></a></h1>
						</div>
						<!-- navigation --> 
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="header-right">
							<div class="agileits-topnav">
								<ul class ="ultop">
									<li><span class="glyphicon glyphicon-earphone"></span> +11 111 2222</li>
									<li> <span class="glyphicon glyphicon-user"></span>
										@if(Auth::check())
										{{Auth::user()->name}}
										@else 
										Guest
										@endif
										</li>
									<li class="social-icons"> 
										<ul >
										<button type="button" class="btn btn-outline-secondary glyphicon glyphicon-shopping-cart btn-checkout">&nbsp;0</button>
										</ul>
										<div class="clearfix"> </div> 
									</li>
								</ul>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">					
								<ul class="nav navbar-nav navbar-left">
									<li class="active"><a href="index.html"><span>H</span><span>O</span><span>M</span><span>E</span></a></li>
									<li><a href="#" class="link link--yaku scroll"><span>A</span><span>B</span><span>O</span><span>U</span><span>T</span> <span>U</span><span>S</span></a></li>
									<li class=""><a href="#" class="dropdown-toggle link link--yaku scroll" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span>P</span><span>A</span><span>G</span><span>E</span><span>S</span><span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#" class="link link--yaku scroll"><span>S</span><span>E</span><span>R</span><span>V</span><span>I</span><span>C</span><span>E</span><span>S</span></a></li>
											<li><a href="#designs" class="link link--yaku scroll"><span>N</span><span>E</span><span>W</span> <span>D</span><span>E</span><span>S</span><span>I</span><span>G</span><span>N</span><span>S</span></a></li>
											<li><a href="#works" class="link link--yaku scroll"><span>W</span><span>O</span><span>R</span><span>K</span><span>S</span></a></li>
										</ul>
									</li>
									<li><a href="#gallery" class="link link--yaku scroll"><span>G</span><span>A</span><span>L</span><span>L</span><span>E</span><span>R</span><span>Y</span></a></li>
									<li><a href="#team" class="link link--yaku scroll"><span>T</span><span>E</span><span>A</span><span>M</span></a></li>
									<li><a href="#mail" class="link link--yaku scroll"><span>M</span><span>A</span><span>I</span><span>L</span> <span>U</span><span>S</span></a></li>
								</ul>		
								<div class="clearfix"> </div>
							</div><!-- //navigation -->
						</div>
						<div class="clearfix"> </div>
					</div>	
				</nav>		
			</div>	
			<!-- //header -->
			<canvas id="demo-canvas" width="1280" height="575"></canvas>
			<!-- banner -->
			<div class="banner-w3text">
				<h3>Welcome <span>TRENDY DRESS </span> <span>COLLECTIONS - 2017</span> </h3>
				<p>Quisque nunc nunc, ullamcorper eget onec massa ipsum, imperdiet eu ornare ac ipsum. Curabitur sagittis ultrices</p>								
				<a href="#" class="effect6" data-toggle="modal" data-target="#myModal"><span>Read More</span></a>
			</div>
			<!-- banner -->
		</div>
	</div>
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="10" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
				</div> 
				<div class="modal-body">
					<img src="{{ URL::asset('images/img.jpg')}}" alt=""> 
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<div class="banner-bottom">
		<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-laptop" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>ORDER ONLINE</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-gift" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>Gift Coupon</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 agileits_banner_bottom_left">
			<div class="agileinfo_banner_bottom_pos">
				<div class="w3_agileits_banner_bottom_pos_grid">
					<div class="col-xs-4 wthree_banner_bottom_grid_left">
						<div class="agile_banner_bottom_grid_left_grid hvr-radial-out">
							<i class="fa fa-money" aria-hidden="true"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_banner_bottom_grid_right">	
						<h4>MONEY BACK</h4>
						<p>Morbi viverra lacus commodo felis semper, eu iaculis lectus feugiat.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="testimo w3ls">
		<div class="container">
			<div class="testimo-main wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
				<p>Full Design</p>
				<h5>BEST FASHION DESTINATION</h5>
				<h3>15% Discount</h3>
				<a href="#mail" class="trend-w3l grid-cont scroll"><span>Contact Now</span></a>
			</div>
		</div>
	</div>
	<div class="team-section" id="team">
		<div class="container">
			<h3 class="w3l-title">Our Team</h3>
			<span class="w3-sub">Our Designing Exports</span>
			<div class="box2">
			<!-- ITEM -->
				<div class="col-md-3 col-xs-3 s-1">
					<div class="view view-fifth">
						<img src="{{ URL::asset('images/t1.jpg')}}" alt="chef">
						<div class="mask pattern-1 flex-center">
							<ul>
								<li>
									<div class="pic fb_icon1">
										<a href="#" class="btn btn-primary btn-info"><span class="glyphicon glyphicon-eye-open"></span> See Detail</a>
									</div>
								</li>
								<li>
									<div class="pic fb_icon2">
										<a href="#" class="btn btn-primary btn-warning"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Now</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<h3>Audrey Bell</h3>
					<p>Designer</p>
				</div>
				<!-- END ITEM -->
				<div class="col-md-3 col-xs-3 s-1">
					<div class="view view-fifth">
						<img src="{{ URL::asset('images/t2.jpg')}}" alt="chef">
						<div class="mask">
							<ul>
								<li>
									<div class="morph pic fb_icon1">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon2">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon3">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<h3>Jason Kerr</h3>
					<p>Fashion Expert</p>
				</div>
				<div class="col-md-3 col-xs-3 s-1">
					<div class="view view-fifth">
						<img src="{{ URL::asset('images/t3.jpg')}}" alt="chef">
						<div class="mask">
							<ul>
								<li>
									<div class="morph pic fb_icon1">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon2">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon3">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<h3>Harry Ince</h3>
					<p>Designer</p>
				</div>
				<div class="col-md-3 col-xs-3 s-1">
					<div class="view view-fifth">
						<img src="{{ URL::asset('images/t4.jpg')}}" alt="chef">
						<div class="mask">
							<ul>
								<li>
									<div class="morph pic fb_icon1">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon2">
										<i class="fa fa-twitter" aria-hidden="true"></i>
									</div>
								</li>
								<li>
									<div class="morph pic fb_icon3">
										<i class="fa fa-dribbble" aria-hidden="true"></i>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<h3>Rachel Rees</h3>
					<p>Fashion Expert</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div id="gallery" class="gallery">
		<div class="container"> 
			<h3 class="w3l-title">Our Gallery</h3>
			<span class="w3-sub">See Our Best Designs</span>
			<div class="gallery-w3lsrow">
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g1.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g1.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g6.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g6.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g4.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g4.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g2.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g2.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g5.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g5.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g3.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g3.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g7.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g7.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-sm-3 col-xs-4 gallery-grids">
					<div class="w3ls-hover">
						<a href="{{ URL::asset('images/g8.jpg')}}" data-lightbox="example-set" data-title="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
							<img src="{{ URL::asset('images/g8.jpg')}}" class="img-responsive zoom-img" alt="">
							<div class="view-caption">
								<h5>Trends</h5>
								<span class="glyphicon glyphicon-search"></span>
							</div>
						</a>
					</div>
				</div>  
				<div class="clearfix"> </div> 
			</div>
			
		</div> 
	</div>
	<div class="w3layouts-newsletter">
		<div class="container">
			<div class="agileinfo-newsletter">
				
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<footer>
		<div class="agileinfo-footer">
			<div class="container">
				<div class="navbar-header navbar-left footer-logo">
					<h2><a href="index.html">Trends<span>Fashion Style</span></a></h2>
				</div>
				<p class="footer-w3l-te">Lorem ipsum dolor sit amet, Excepteur sint occaecat cupidatat non consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<div class="w3ls-social-icons-2">
					<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
					<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
					<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
					<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
				<div class="agileits-footer-top">
					<div class="col-sm-4 w3ls-address-grid">
						<i class="glyphicon glyphicon-map-marker"></i>
						<div class="w3-address1">
							<p>Lorem ipsum,
							MK 19034-88974</p>
						</div>
					</div>
					<div class="col-sm-4 w3ls-address-grid">
						<i class="glyphicon glyphicon-phone"></i>
						<div class="w3-address1">
						<p>+012 345 6789</p>
						</div>
					</div>
					<div class="col-sm-4 w3ls-address-grid">
						<i class="glyphicon glyphicon-envelope"></i>
						<div class="w3-address1">
							<p><a href="mailto:info@example.com"> mail@example.com</a></p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="agileits-footer-bottom">
				<div class="container">
					<p class="footer-class">© 2017 Trends. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
					<div class="ftr-menu">
						 <ul>
							<li><a class="scroll" href="#home">Home </a></li>
							<li><a class="scroll" href="#about">About</a></li>
							<li><a class="scroll" href="#works">Works</a></li>
							<li><a class="scroll" href="#team">Team</a></li>
							<li><a class="scroll" href="#gallery">Gallery</a></li>
							<li><a class="scroll" href="#mail">Mail Us</a></li>
						 </ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</footer>
<!-- js files -->
<!-- js -->
<script type="text/javascript" src="{{ URL::asset('js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/bootstrap.js')}}"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!--  light box js -->
<script src="{{ URL::asset('js/lightbox-plus-jquery.min.js')}}"> </script> 
<!-- //light box js--> 
<!-- start-smooth-scrolling-->
<script type="text/javascript" src="{{ URL::asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ URL::asset('js/easing.js')}}"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
		
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!-- //end-smooth-scrolling -->	
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		
		$().UItoTop({ easingType: 'easeOutQuart' });
		
	});
</script>
<!-- //smooth-scrolling-of-move-up -->
<!-- bg effect -->
<script src="{{ URL::asset('js/rAF.js')}}"></script>
<script src="{{ URL::asset('js/demo-2.js')}}"></script>
<!-- //bg effect -->
<!-- Stats-Number-Scroller-Animation-JavaScript -->
<script src="{{ URL::asset('js/waypoints.min.js')}}"></script> 
<script src="{{ URL::asset('js/counterup.min.js')}}"></script> 
<script>
	jQuery(document).ready(function( $ ) {
		$('.counter').counterUp({
			delay: 10,
			time: 1000 
		});
	});
</script>
<!-- //Stats-Number-Scroller-Animation-JavaScript -->
<!-- jarallax -->
<script src="{{ URL::asset('js/jarallax.js')}}"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- //jarallax --> 
<!-- smooth scrolling -->
<script src="{{ URL::asset('js/SmoothScroll.min.js')}}"></script>
<!-- //smooth scrolling -->
<!-- //js files -->
@endsection