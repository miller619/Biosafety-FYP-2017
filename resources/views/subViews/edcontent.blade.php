@extends('layouts.app')
@section('title',  '| OHS')
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
            <ul>
              <li><a href="{{ url('/home/edcontent/EDFormB') }}">SBC-Application for Biosafety Clearance for use of Exempt Dealings</a></li>
              <li><a href="{{ url('/home/edcontent/EDFormA') }}">OHS-F-4.5.X HIRARC Form</a></li>
              <li><a href="{{ url('/home/edcontent/EDFormC') }}">SSBC_001 Safe Work Procedure V2</a></li>
            </ul>
          </div>          
        </div>
      </div>

      <div class="row">
      <h2>New Application</h2>
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
              </tr>
            </thead>
            <tbody>
              
         @foreach($clearence['clearence'] as $clearence)     
              <tr>                
                <td>{{ $clearence->id }}</td>
                <td><a href="">{{ $clearence->user->name }}</a></td>
                <td>{{$clearence->created_at->todatestring()}}</td>
                <td>Approval Pending</td>
              </tr>
        @endforeach      
              
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
      <h2>Approved Applications</h2>
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
                <td>Approved Date</td>
              </tr>
            </thead>
            <tbody>
             
        @foreach($approved['approved'] as $app) 
              <tr>                
                <td>{{ $app->id }}</td>
                <td><a href=""></a>{{ $app->user->name }}</td>
                <td>{{$app->created_at->todatestring()}}</td>
                <td>Approved</td>
                <td>{{$app->updated_at->todatestring()}}</td>
              </tr>
        @endforeach      
              
            </tbody>
          </table>
        </div>
      </div>

      <div class="row">
      <h2>Declined Applications</h2>
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Declined</td>
                <td>Declined Date</td>
              </tr>
            </thead>
            <tbody>
              @foreach($declined['declined'] as $decline)
              
              <tr>
                <td>{{ $decline->id }}</td>
                <td><a href="">{{ $decline->user->name }}</a></td>
                <td>{{$decline->created_at->todatestring()}}</td>
                <td>Declined</td>
                <td>{{$decline->updated_at->todatestring()}}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <h2>Pending Approval from Super Admin</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
              </tr>
            </thead>
            <tbody>
              
          @foreach($sendData['sendData'] as $send)    
              <tr>
                <td>{{$send->id}}</td>
                <td><a href="">{{ $send->user->name}}</a></td>
                <td>{{ $send->created_at}}</td>
                <td>Approval Pending</td>
              </tr>
          @endforeach   
              
            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>
</div>
@stop