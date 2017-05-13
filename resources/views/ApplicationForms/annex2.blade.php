@extends('layouts.app')
@section('title',  '| IBC Assesment of Project Proposal')
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
					<div class="row">
						<h2>IBC ASSESMENT OF PROJECT PROPOSAL INVOLVING MODERN BIOTECHNOLOGY ACTIVITIES</h2>
						
						<div class="well">
							
							{!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
							
							<fieldset>
								
								<legend>1.General Information</legend>
								
								
								<!-- Name Of Applicant -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('NameApp', '1.1.Name Of Applicant')!!}<br>
											{!! Form::text('NameApp', 'Example:John Dekker')!!}
										</div>
									</div>
								</div>
								<!-- Institutional Address -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('InstiAdd', '1.2.Institutional Address')!!}<br>
											{!! Form::text('InstiAdd')!!}
										</div>
									</div>
								</div>
								<!--  Collaborating partners-->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('ColabPartner', '1.3.Collaborating partners')!!}<br>
											{!! Form::textarea('ColabPartner')!!}
										</div>
									</div>
								</div>
								<!-- Project Title -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('projTitle', '1.4.Project Title')!!}<br>
											{!! Form::text('projTitle')!!}
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>2.Experimental Parameters</legend>
								<p>IBC assessment/recommendation on each of the following:</p>
								
								<!-- Project Objective and Methodology -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-8">
											{!! Form::label('ProjObjnMetho', '2.1.Project Objective and Methodology')!!}<br>
											{!! Form::text('ProjObjnMetho')!!}
										</div>
									</div>
								</div>
								<!-- Biological System -->
								<div class="col-xs-6">
									<div class="form-group">
										
										{!! Form::label('BioSys', '2.2.Biological system')!!}<br><br>
										{!! Form::label('parntOrg', 'i.Common Name of Parent Organism(s)')!!}
										{!! Form::text('parntOrg')!!}<br><br>
										{!! Form::label('donrOrga', 'ii.Common Name of Donor Organism(s)')!!}
										{!! Form::text('donrOrga')!!}<br><br>
										{!! Form::label('geneMod', 'iii.Name of gene(s) for the modified traits(s)')!!}
										{!! Form::text('geneMod')!!}<br><br>
										
									</div>
								</div>
								<!-- Premises or location of contained use activity/field experiment -->
								<div class="col-xs-8">
									<div class="form-group">
										<div class="col-xs-8">
											{!! Form::label('PremiExp', '2.3.Premises or location of contained use activity/field experiment ')!!}<br>
											{!! Form::text('PremiExp')!!}
										</div>
									</div>
								</div>
								<!-- Period of contained use activity/field experiment -->
								<div class="col-xs-8">
									<div class="form-group">
										<div class="col-xs-8">
											{!! Form::label('PeriExp', '2.4.eriod of contained use activity/field experiment ')!!}<br>
											{!! Form::text('PeriExp')!!}
										</div>
									</div>
								</div>
								<!-- Risk Assesment and Risk Management -->
								<div class="col-xs-8">
									<div class="form-group">
										<div class="col-xs-8">
											{!! Form::label('rskMng', '2.5.Risk Assesment and Risk Management')!!}<br>
											{!! Form::text('rskMng')!!}
										</div>
									</div>
									<!-- Emergency Responce Plan -->
									<div class="col-xs-8">
										<div class="form-group">
											<div class="col-xs-8">
												{!! Form::label('emgPlan', '2.6.Emergency Responce Plan ')!!}<br>
												{!! Form::text('emgPlan')!!}
											</div>
										</div>
									</div>
									<!-- Additional IBC recommendation (if any) -->
									<div class="col-xs-8">
										<div class="form-group">
											<div class="col-xs-8">
												{!! Form::label('addReco', '2.7.Additional IBC recommendation (if any) ')!!}<br>
												{!! Form::text('addReco')!!}
											</div>
										</div>
									</div>
								</div>
							</fieldset>
							<fieldset>
								<legend>3.Details of Principal Investigator</legend>
								<!-- Experience and Expertise-->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('exNexp', '3.1.Experience and Expertise')!!}<br>
											{!! Form::text('exNexp', 'Example:John Dekker')!!}
										</div>
									</div>
								</div>
								<!-- Training -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('Training', '3.2.Training')!!}<br>
											{!! Form::text('Training')!!}
										</div>
									</div>
								</div>
								<!-- Health -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('Health', '3.3.Health')!!}<br>
											{!! Form::text('Health')!!}
										</div>
									</div>
								</div>
								<!-- other -->
								<div class="col-xs-6">
									<div class="form-group">
										<div class="col-xs-6">
											{!! Form::label('other', '3.4.other')!!}<br>
											{!! Form::text('other')!!}
										</div>
									</div>
								</div>
							</fieldset>
							
							<fieldset>
								<legend>4.List of all Personell involved in Project </legend>
								<div class="form-group">
									<div class="table-responsive">
										<table id="bio" class="table table-bordered" width="100%" cellspacing="0">
											<thead>
												<tr>
													<th>No.</th>
													<th>Name</th>
													<th>Designation</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>
														{!! Form::text('name')!!}
													</td>
													<td>
														{!! Form::text('designation')!!}
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>
														{!! Form::text('name')!!}
													</td>
													<td>
														{!! Form::text('designation')!!}
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>
														{!! Form::text('name')!!}
													</td>
													<td>
														{!! Form::text('designation')!!}
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>
														{!! Form::text('name')!!}
													</td>
													<td>
														{!! Form::text('designation')!!}
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>
														{!! Form::text('name')!!}
													</td>
													<td>
														{!! Form::text('designation')!!}
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</fieldset>
							
							{!! Form::close()  !!}
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</div>
@stop