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
<div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
	<div class="page-content inset">
		
		<div class="row">
			<div class="col-xs-12">
				<h2>My Submits</h2>
			</div>
		</div>
@foreach($data as $row)
		
		<table class="table table-bordered">
	  		<thead>
	  			<tr>
	  				<td>Id</td>
	  				<td>Title</td>
	  				<td>Check if Aproved</td>
	  			</tr>
	  		</thead>
	  		<tbody>
	  			<tr>
	  				<td>{{$row->id}}</td>
	  				<td>{{$row->Title}}</td>
@endforeach
					<td><a href="">Click here</a></td>
	  			</tr>
	  		</tbody>




			
	</div>
</div>

</div>

@endsection