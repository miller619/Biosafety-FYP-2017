@extends('layouts.app')
@section('title',  '| Clearance | My Submits')
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
		<div class="well">
<!-- 			@foreach( $userdetails as $data )
				<div class="row">
					<div class="col-md-12"> 
						<strong>1.Title:</strong>
						{{$data -> Title }}
					</div>
                </div>
                        
                <div class="row">
                	<div class="col-md-12">
                		<strong>2.Project Summary:</strong>
                		{{$data -> Project_summary }}
                	</div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <strong>3.What are the possible hazard(s) or risk(s) involved?:</strong>
                        {{$data -> Possible_hazards }}
                    </div>
                </div>

                <div class="row">                           
                                  <!-- Process or Location -->
                    <div class="form-group">
                        <div class="col-xs-6">
                            <strong>4.Building number:</strong>
                            {{$data -> Building_No }}
                        </div>
                        <div class="col-xs-6">
                            <strong>5.Room Number</strong>
                            {{$data -> Room_No }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-xs-6">
                                <strong>6.Containment number:</strong>
                                {{$data -> Containment_No }}
                            </div>
                            <div class="col-xs-6">
                                <strong>7.Certificate Number:</strong>
                                {{$data -> Certificate_No }}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach -->                                                
                    
                
                <div class="row">                                                        
                <div class="form-group">
                    <div class="row>">
                        <div class="col-md-12">
                            <div class="col-xs-6">
                                
                                <strong>Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the dealing is to be conducted been made aware of this application</strong>
                                {{ yes }}
                                
                            </div>
                            <div class="col-xs-6">
                                <strong>8.Name of biosafety officer(s):</strong>
                                {{$data -> name_of_officer }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-xs-6 col-md-offset-6">
                                <strong>9.Name of Laboratory Manager:</strong>
                                {{$data -> name_lab_mngr }}
                            </div>                                        
                        </div>                                  
                    </div>
                </div>
                </div>
    </div>
    </div>
    </div>
    </div>

@endsection