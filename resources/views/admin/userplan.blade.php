<?php
if (Auth('admin')->User()->dashboard_style == "light") {
    $text = "dark";
} else {
    $text = "light";
}
?>
@extends('layouts.app')
    @section('content')
        @include('admin.topmenu')
        @include('admin.sidebar')
		<div class="main-panel">
			<div class="content bg-{{Auth('admin')->User()->dashboard_style}} ">
				<div class="page-inner">
					<div class="mt-2 mb-4">
					<h1 class="title1 text-{{$text}}">User Plan</h1>
					</div>
					@if(Session::has('message'))
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-info alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<i class="fa fa-info-circle"></i> {{ Session::get('message') }}
							</div>
						</div>
					</div>
					@endif
		
					@if(count($errors) > 0)
					<div class="row">
						<div class="col-lg-12">
							<div class="alert alert-danger alert-dismissable" role="alert" >
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								@foreach ($errors->all() as $error)
								<i class="fa fa-warning"></i> {{ $error }}
								@endforeach
							</div>
						</div>
					</div>
					@endif
					
					<div class="mb-5 row">
						<div class="col card shadow p-4 bg-{{Auth('admin')->User()->dashboard_style}}">
							<div class="table-responsive" data-example-id="hoverable-table"> 
								<table id="ShipTable" class="table table-hover text-{{$text}}"> 
									<thead> 
										<tr> 
											<th>Client name</th>
											<th>Amount</th>
											<th>Plan</th>
											<th>Active</th> 
											<th>Date created</th>
											<th>Option</th>
										</tr> 
									</thead> 
									<tbody> 
										@foreach($userplan as $deposit)
										<tr> 
											<td>{{$deposit->duser->name}}</td>
											<td>{{$settings->s_currency}}{{$deposit->amount}}</td> 
											<td>{{$deposit->dplan->name}}</td>
                                            <td>{{$deposit->active}}</td> 
											<td>{{\Carbon\Carbon::parse($deposit->created_at)->toDayDateTimeString()}}</td> 
											<td>
												<a href="#" class="m-1 btn btn-info btn-sm" data-toggle="modal" data-target="#bkModal{{$deposit->id}}"> Back Date</a>
											</td> 
										</tr> 
										
										<!-- View info modal-->
										<div id="bkModal{{$deposit->id}}" class="modal fade" role="dialog">
											<div class="modal-dialog">
				
												<!-- Modal content-->
												<div class="modal-content">
													<div class="modal-header bg-{{Auth('admin')->User()->dashboard_style}} ">
														<h4 class="modal-title text-{{$text}}">Back Date</strong></h4>
									 					<button type="button" class="close text-{{$text}}" data-dismiss="modal">&times;</button>
													</div>
													<div class="modal-body bg-{{Auth('admin')->User()->dashboard_style}}">
														<form role="form" method="post" action="{{route('backdateinvest')}}">
															@csrf
															<input  class="form-control bg-{{Auth('admin')->User()->dashboard_style}} text-{{$text}}" name="date" type="datetime-local"><br/>
															
															<input  type="hidden" name="id" value="{{$deposit->id}}"><br/>
														<input type="submit" class="btn btn-{{$text}}" value="Submit">
													</form>
													</div>
												</div>
											</div>
											</div>
											<!--End View info modal-->

										@endforeach
									</tbody> 
								</table>
							</div>
						</div>
					</div>
				</div>	
			</div>
	@endsection