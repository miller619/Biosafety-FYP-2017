@extends('layouts.app')
@section('title',  '| Notification for Biohazardous Material')
@section('content')
<div id="wrapper" class="active">
	
	<!-- Sidebar -->
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul id="sidebar_menu" class="sidebar-nav">
			<li class="sidebar-brand">menu</li>
		</ul>
		@include('includes.sidebar')
	</div>
	
	<!-- Page content -->
	<div id="page-content-wrapper">
		<!-- Keep all page content within the page-content inset div! -->
		<div class="page-content inset">
			<div class="row">
				<div class="col-xs-12">
					<div class="well">
						<form class="form-horizontal" role="form" method="POST" action="{{ route('submit.bmnotification') }}">
							{{ csrf_field() }}
						

							<fieldset>
								<div class="row">
									<div class="col-xs-12">
										<div class="row">
											<legend>
												SECTION 2 – Details of the Biohazardous Materials
											</legend>
											<div class="col-xs-8">
												<h4>List of Biohazardous Materials</h4>
											</div>
											<div class="col-xs-4">
												<input type="checkbox"/>Applicable
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12">
												<div id="LMOtablediv">
													<input type="button" id="addmoreBMbutton" value="Add" onclick="insRow(event)" />
													<table id="addLMOtable" border="1">
														<thead>
															<tr>
																<td>No.</td>
																<td>Name</td>
																<td>Risk Level</td>
																<td>Quantity</td>
																<td>Volume</td>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>{!! Form::text('bm_name[]', null, array('id'=>'name'))!!}</td>
																<td>{!! Form::text('bm_risk_level[]', null, array('id'=>'risk_level'))!!}</td>
																<td>{!! Form::number('bm_quantity[]', null, array('id'=>'quantity'))!!}</td>
																<td>{!! Form::number('bm_volume[]', null, array('id'=>'volume'))!!}</td>
																<td><input type="button" id="delBMbutton" value="Delete" onclick="deleteRow(this)"/></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</fieldset>

							<div class="row">
								<div class="form-group">
									<div class="col-md-6 col-md-offset-10">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop