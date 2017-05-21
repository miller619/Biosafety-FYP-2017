@extends('layouts.app')
@section('title',  '| Clearance')
@section('content')
<div id="wrapper" class="active">
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
            {!! Form::open(['url' => '/home/edcontent/EDFormB2/Submit', 'class' => 'form-horizontal'])!!}
            
            <div class="row">
                <div class="col-xs-12">
                    <h1>2.Researchers involved in the conduct of the project</h1> 
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h4>Project Supervisor (must be a Swinburne staff member)</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('ed_form_id', '1.Clearence ID:', ['class' => 'form-label']) !!}
                    {!! Form::text('ed_form_id', "$clearence->id", ['id'=>'ed_form_id', 'class' => 'form-control' ])!!}
                </div>   
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('name', 'Name:', ['class' => 'form-label']) !!} 
                    {!! Form::text('name', null, ['id'=>'name', 'class' => 'form-control' ])!!}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('current_qualification', 'Current qualifications:', ['class' => 'form-label']) !!} 
                    {!! Form::text('current_qualification', null, ['id'=>'current_qualification', 'class' => 'form-control'])!!}
                </div>    
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('department', 'Department:', ['class' => 'form-label']) !!} 
                    {!! Form::text('department', null, ['id'=>'department', 'class' => 'form-control'])!!}
                </div>   
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('p_address', 'Full postal address (including internal mail details)', ['class' => 'form-label']) !!} 
                    {!! Form::text('p_address', null, ['id'=>'p_address', 'class' => 'form-control'])!!}
                </div>   
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('tele', 'Phone:', ['class' => 'form-label']) !!} 
                    {!! Form::text('tele', null, ['id'=>'tele', 'class' => 'form-control'])!!}
                </div>                
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('fax', 'Fax:', ['class' => 'form-label']) !!} 
                    {!! Form::text('fax', null, ['id'=>'fax', 'class' => 'form-control'])!!}
                </div>    
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! Form::label('email_address', 'Email', ['class' => 'form-label']) !!} 
                    {{ Form::email('email_address', 'noreply@gmail.com', ['id' => 'email_address', 'class' => 'form-control']) }}
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-xs-offset-6">
                     {!! Form::submit('Next', ['class' => 'btn btn-lg btn-info btn-block'] ) !!}    
                </div>
            </div>
                                     
            {{ Form::close() }}
        </div>                
</div>
</div>
</div>
@endsection