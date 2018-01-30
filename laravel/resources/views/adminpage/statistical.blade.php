@extends('adminpage')
@section('content')
<div class="row">

    <div class="clearfix"></div>
    <div class="col-md-6">
      <div class="card">
        <h3 class="card-title">Pie Chart</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="pieChartDemo" width="432" height="243" style="width: 432px; height: 243px;"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <h3 class="card-title">Doughnut Chart</h3>
        <div class="embed-responsive embed-responsive-16by9">
          <canvas class="embed-responsive-item" id="doughnutChartDemo" width="432" height="243" style="width: 432px; height: 243px;"></canvas>
        </div>
      </div>
    </div>
  </div>
@endsection