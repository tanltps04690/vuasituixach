@extends('adminpage') @section('content')
<div class="content-page">
	<!-- Start content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
							<div id="sampleTable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
								<div class="row">
                                    <form method = "POST" action="searchcheat">
                                            {!! csrf_field() !!}
                                    <div class="col-sm-6">
										<div class="dataTables_length" id="sampleTable_length">
											<label>Show
												<select name="sampleTable_length" aria-controls="sampleTable" class="form-control input-sm">
													<option value="10">10</option>
													<option value="25">25</option>
													<option value="50">50</option>
													<option value="100">100</option>
												</select> entries</label>
										</div>
                                    </div>
                                    

                                    {{--  SEARCH  --}}
                                    
									<div class="col-sm-6">
										<div id="sampleTable_filter" class="dataTables_filter">
											<label>Search:
												<input type="search" class="form-control input-sm" placeholder="Enter Number Phone" aria-controls="sampleTable" name = "key" >
                                                {{--  <button class="flat-butt">Default Button</button>  --}}
                                            </label>
                                            
										</div>
                                    </div>
                                </form>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<table class="table table-hover table-bordered dataTable no-footer" id="sampleTable" role="grid" aria-describedby="sampleTable_info">
											<thead>
												<tr role="row">
													<th class="sorting_asc" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-sort="ascending"
													 aria-label="Name: activate to sort column descending" style="width: 141px;">Name</th>
													
													
													<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending"
													 style="width: 55px;">Phone</th>
													<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending"
													 style="width: 150px;">Address</th>
													<th class="sorting" tabindex="0" aria-controls="sampleTable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending"
													 style="width: 350px;">Description</th>
												</tr>
											</thead>
											<tbody>
                                                
												@foreach($data as $val)
												<tr role="row" class="odd">
													<td class="sorting_1">{{$val['cheat_name']}}</td>
													<td>{{$val['cheat_phone']}}</td>
													<td>{{$val['cheat_address']}}</td>
													<td>{{$val['cheat_des']}}</td>
													
												</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-5">
										<div class="dataTables_info" id="sampleTable_info" role="status" aria-live="polite"style = "color:#FFF;">Showing 1 to 10 of 57 entries</div>
									</div>
									<div class="col-sm-12">
										<div class="dataTables_paginate paging_simple_numbers" id="sampleTable_paginate">
											<ul class="pagination">
												<li class="paginate_button previous disabled" id="sampleTable_previous">
													<a href="#" aria-controls="sampleTable" data-dt-idx="0" tabindex="0">Previous</a>
												</li>
												<li class="paginate_button active">
													<a href="#" aria-controls="sampleTable" data-dt-idx="1" tabindex="0">1</a>
												</li>
												<li class="paginate_button ">
													<a href="#" aria-controls="sampleTable" data-dt-idx="2" tabindex="0">2</a>
												</li>
												<li class="paginate_button ">
													<a href="#" aria-controls="sampleTable" data-dt-idx="3" tabindex="0">3</a>
												</li>
												<li class="paginate_button ">
													<a href="#" aria-controls="sampleTable" data-dt-idx="4" tabindex="0">4</a>
												</li>
												<li class="paginate_button ">
													<a href="#" aria-controls="sampleTable" data-dt-idx="5" tabindex="0">5</a>
												</li>
												<li class="paginate_button ">
													<a href="#" aria-controls="sampleTable" data-dt-idx="6" tabindex="0">6</a>
												</li>
												<li class="paginate_button next" id="sampleTable_next">
													<a href="#" aria-controls="sampleTable" data-dt-idx="7" tabindex="0">Next</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
		<!-- end container -->
	</div>
	<!-- end content -->

	<footer class="footer">
		2016 - 2017 © Minton
		<span class="hide-phone">- Coderthemes.com</span>
	</footer>

</div>
@endsection