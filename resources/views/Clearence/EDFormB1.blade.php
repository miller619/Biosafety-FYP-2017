@extends('layouts.app')
@section('title',  '| Clearance')
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

     @include('includes._messages')
    
		<div class="well">
			{!! Form::open(['method' => 'POST', 'route' => ['show.fromB2', Auth::user()->id], 'class' => 'form-horizontal']) !!}
				<div class="row">
					<div class="col-md-12"> 
						{!! Form::label('Title', '1.Title:', ['class' => 'control-label']) !!}
						{!! Form::text('Title', $value = null, ['class' => 'form-control']) !!}
					</div>
                </div>
                        
                <div class="row">
                	<div class="col-md-12">
                		{!! Form::label('Project_summary', '2.Project Summary:', ['class' => 'control-label']) !!}
                            <p></p>
                		{!! Form::text('Project_summary', $value = null, ['class' => 'form-control', 'placeholder' => 'Briefly describe the project, including background, aims and methods. (This should be witten in plain English)']) !!}
                	</div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        {!! Form::label('Possible_hazards', '3.What are the possible hazard(s) or risk(s) involved?:', ['class' => 'control-label']) !!}
                            <p></p>
                        {!! Form::text('Possible_hazards', $value = null, ['class' => 'form-control', 'placeholder' => 'If your work involves an exempt dealing - clarify why it is exempt']) !!}
                    </div>
                </div>

                <!-- <div class="row">Added in the next form
                    <div class="col-md-12">
                        {!! Form::label('List_of_SOP_&_Risk', '4. Provide a list of the SOPs and Risk Assessments to be used.:', ['class' => 'control-label']) !!}
                            <p></p>
                        {!! Form::text('List_of_SOP_&_Risk', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div> -->

                <div class="row">
                    <div class="col-xs-12">
                                    
                                    <!-- Process or Location -->
                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('Building_No', '4.Building number:', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('Building_No', $value = null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::label('Room_No', '5.Room Number', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('Room_No', $value = null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-xs-6">
                                {!! Form::label('Containment_No', '6.Containment number:', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('Containment_No', $value = null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="col-xs-6">
                                {!! Form::label('Certificate_No', '7.Certificate Number:', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('Certificate_No', $value = null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                                                            
                    
                </div>
                <div class="row">                                                        
                <div class="form-group">
                    <div class="row>">
                        <div class="col-md-12">
                            <div class="col-xs-6">
                                
                                {!! Form::label('radio', 'Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the dealing is to be conducted been made aware of this application', ['class' => 'control-label']) !!}
                                {!! Form::checkbox('radio', '1'); !!}Yes
                                
                            </div>
                            <div class="col-xs-6">
                                {!! Form::label('name_of_officer', '8.Name of biosafety officer(s):', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('name_of_officer', $value = null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-6 col-md-offset-6">
                                {!! Form::label('name_lab_mngr', '9.Name of Laboratory Manager:', ['class' => 'control-label']) !!} <br>
                                {!! Form::text('name_lab_mngr', $value = null, ['class' => 'form-control']) !!}
                            </div>                                        
                        </div>                                  
                    </div>
                </div>
                </div>

			{!! Form::submit('Next', ['class' => 'btn btn-lg btn-info btn-block'] ) !!}
		  
        
	{{ Form::close() }}
    </div>
    </div>
    </div>
    </div>
    @endsection