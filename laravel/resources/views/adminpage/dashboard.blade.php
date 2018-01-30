@extends('adminpage') 
@section('content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<div class="widget-simple-chart text-right card-box">
						<div class="circliful-chart circliful" data-dimension="90" data-text="35%" data-width="5" data-fontsize="14" data-percent="35" data-fgcolor="#5fbeaa" data-bgcolor="#505A66" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;">35%</span><span class="circle-text" style="line-height: 90px; font-size: 14px;">35%</span></div>
						<h3 class="text-success counter m-t-10">2562</h3>
						<p class="text-muted text-nowrap m-b-10">Total Sales today</p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="widget-simple-chart text-right card-box">
						<div class="circliful-chart circliful" data-dimension="90" data-text="75%" data-width="5" data-fontsize="14" data-percent="75" data-fgcolor="#3bafda" data-bgcolor="#505A66" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;"></span><span class="circle-text" style="line-height: 90px; font-size: 14px;">75%</span></div>
						<h3 class="text-primary counter m-t-10">5685</h3>
						<p class="text-muted text-nowrap m-b-10">Daily visitors</p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="widget-simple-chart text-right card-box">
						<div class="circliful-chart circliful" data-dimension="90" data-text="58%" data-width="5" data-fontsize="14" data-percent="58" data-fgcolor="#f76397" data-bgcolor="#505A66" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;"></span><span class="circle-text" style="line-height: 90px; font-size: 14px;">58%</span></div>
						<h3 class="text-pink m-t-10">$ <span class="counter">12480</span></h3>
						<p class="text-muted text-nowrap m-b-10">Total Earning</p>
					</div>
				</div>

				<div class="col-sm-6 col-lg-3">
					<div class="widget-simple-chart text-right card-box">
						<div class="circliful-chart circliful" data-dimension="90" data-text="49%" data-width="5" data-fontsize="14" data-percent="49" data-fgcolor="#98a6ad" data-bgcolor="#505A66" style="width: 90px;"><span class="circle-text" style="line-height: 90px; font-size: 14px;"></span><span class="circle-text" style="line-height: 90px; font-size: 14px;">49%</span></div>
						<h3 class="text-inverse counter m-t-10">62</h3>
						<p class="text-muted text-nowrap m-b-10">Pending Orders</p>
					</div>
				</div>
			</div>
			<!-- end row -->
			<div class="row">
				<div class="col-lg-4">
					<div class="card-box">
						<h4 class="header-title m-t-0 m-b-30">Total Revenue</h4>

						<div class="widget-chart text-center">
							<div id="sparkline1"><canvas width="272" height="200" style="display: inline-block; width: 272.328px; height: 200px; vertical-align: top;"></canvas></div>
							<ul class="list-inline m-t-15 mb-0">
								<li>
									<h5 class="text-muted m-t-20">Target</h5>
									<h4 class="m-b-0">$56,214</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last week</h5>
									<h4 class="m-b-0">$98,251</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last Month</h5>
									<h4 class="m-b-0">$10,025</h4>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<div class="card-box">
						<h4 class="header-title m-t-0 m-b-30">Yearly Sales Report</h4>

						<div class="widget-chart text-center">
							<div id="sparkline2"><canvas width="235" height="200" style="display: inline-block; width: 235px; height: 200px; vertical-align: top;"></canvas></div>
							<ul class="list-inline m-t-15 mb-0">
								<li>
									<h5 class="text-muted m-t-20">Target</h5>
									<h4 class="m-b-0">$1000</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last week</h5>
									<h4 class="m-b-0">$523</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last Month</h5>
									<h4 class="m-b-0">$965</h4>
								</li>
							</ul>
						</div>
					</div>

				</div>

				<div class="col-lg-4">
					<div class="card-box">
						<h4 class="header-title m-t-0 m-b-30">Weekly Sales Report</h4>

						<div class="widget-chart text-center">
							<div id="sparkline3"><canvas width="200" height="200" style="display: inline-block; width: 200px; height: 200px; vertical-align: top;"></canvas></div>
							<ul class="list-inline m-t-15 mb-0">
								<li>
									<h5 class="text-muted m-t-20">Target</h5>
									<h4 class="m-b-0">$1,84,125</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last week</h5>
									<h4 class="m-b-0">$50,230</h4>
								</li>
								<li>
									<h5 class="text-muted m-t-20">Last Month</h5>
									<h4 class="m-b-0">$87,451</h4>
								</li>
							</ul>
						</div>
					</div>

				</div>

			</div>
			<!-- end row -->



			<div class="row">
				<div class="col-lg-6">
					<div class="card-box">
						<div class="row">
							<div class="col-sm-7">
								<div class="row">
									<div class="col-6 text-center">
										<canvas id="partly-cloudy-day" width="100" height="100"></canvas>
									</div>
									<div class="col-6">
										<h2 class="m-t-0 text-muted"><b>32°</b></h2>
										<p class="text-muted">Partly cloudy</p>
										<p class="text-muted mb-0">15km/h - 37%</p>
									</div>
								</div><!-- End row -->
							</div>
							<div class="col-sm-5">
								<div class="row">
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">SAT</h4>
										<canvas id="cloudy" width="35" height="35"></canvas>
										<h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
									</div>
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">SUN</h4>
										<canvas id="wind" width="35" height="35"></canvas>
										<h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
									</div>
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">MON</h4>
										<canvas id="clear-day" width="35" height="35"></canvas>
										<h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
									</div>
								</div><!-- end row -->
							</div>
						</div><!-- end row -->
					</div>
				</div> <!-- end col -->

				<div class="col-lg-6">
					<div class="card-box">
						<div class="row">
							<div class="col-sm-7">
								<div class="">
									<div class="row">
										<div class="col-6 text-center">
											<canvas id="snow" width="100" height="100"></canvas>
										</div>
										<div class="col-6">
											<h2 class="m-t-0 text-muted"><b> 23°</b></h2>
											<p class="text-muted">Partly cloudy</p>
											<p class="text-muted mb-0">15km/h - 37%</p>
										</div>
									</div><!-- end row -->
								</div><!-- weather-widget -->
							</div>
							<div class="col-sm-5">
								<div class="row">
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">SAT</h4>
										<canvas id="sleet" width="35" height="35"></canvas>
										<h4 class="text-muted">30<i class="wi wi-degrees"></i></h4>
									</div>
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">SUN</h4>
										<canvas id="fog" width="35" height="35"></canvas>
										<h4 class="text-muted">28<i class="wi wi-degrees"></i></h4>
									</div>
									<div class="col-4 text-center">
										<h4 class="text-muted m-t-0">MON</h4>
										<canvas id="partly-cloudy-night" width="35" height="35"></canvas>
										<h4 class="text-muted">33<i class="wi wi-degrees"></i></h4>
									</div>
								</div><!-- End row -->
							</div> <!-- col-->
						</div><!-- End row -->
					</div>
				</div> <!-- end col -->
			</div>
			<!--end row/ WEATHER -->
			<!-- end row -->


		</div>
		<!-- end container -->
	</div>
	<!-- end content -->

	<footer class="footer">
		2016 - 2017 © Minton <span class="hide-phone">- Coderthemes.com</span>
	</footer>

</div>
@endsection