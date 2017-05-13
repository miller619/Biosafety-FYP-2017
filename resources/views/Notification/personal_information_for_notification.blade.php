@extends('layouts.app')
@section('title',  '| Notification personal Information')
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
						<form class="form-horizontal" role="form" method="POST" action="{{route('submit.personal_info_for_notification')}}">
							{{ csrf_field() }}
							
							<fieldset>
								<legend>
									SECTION 1 - Personal Details
								</legend>
								<div class="row">
									<div class="col-xs-12">
										
										<div class="form-group">
											<div class="col-xs-12">
												{!! Form::label('unit_code', 'Unit Code (if teaching):', ['class' => 'control-label']) !!} <br>
												{!! Form::text('unit_code', $value = null, ['class' => 'form-control']) !!}
											</div>
											<div class="col-xs-12">
												{!! Form::label('unit_title', 'Unit Title (if teaching):', ['class' => 'control-label']) !!} <br>
												{!! Form::text('unit_title', $value = null, ['class' => 'form-control']) !!}
											</div>
											<div class="col-xs-12">
												{!! Form::label('project_title', 'Project Title (if FYP/research):', ['class' => 'control-label']) !!} <br>
												{!! Form::text('project_title', $value = null, ['class' => 'form-control']) !!}
											</div>
											<div class="col-xs-12">
												{!! Form::label('project_ref_number', 'Ref. No (if FYP/research):', ['class' => 'control-label']) !!} <br>
												{!! Form::text('project_ref_number', $value = null, ['class' => 'form-control']) !!}
											</div>
											<div class="col-xs-12">
												{!! Form::label('storage_location', 'Storage Location:', ['class' => 'control-label']) !!} <br>
												{!! Form::text('storage_location', $value = null, ['class' => 'form-control' ]) !!}
											</div>
											<div class="col-xs-12">
												{!! Form::label('keeper_name', 'Name of the Keeper:', ['class' => 'control-label']) !!} <br>
												{!! Form::text('keeper_name', $value = null, ['class' => 'form-control' ]) !!}
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