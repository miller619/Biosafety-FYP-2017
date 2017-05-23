@extends('layouts.app')
@section('title',  '| Homepage')
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
      
          @foreach ($userdetails as $userdetail)
      <div class="row">
        <div class="col-xs-6">
          <strong>Name:</strong><br>{{$userdetail->user->name}}<br><br>
        </div>
        <div class="col-xs-6">
          <strong>Staff/Student ID:</strong><br>{{$userdetail->user->userInstitutionID}}<br><br>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-6">
          <strong>Designation:</strong><br>{{$userdetail->user->userDesignation}}<br><br>
        </div>
        <div class="col-xs-6">
          <strong>Faculty:</strong><br>{{$userdetail->user->userFaculty}}<br><br>
        </div>
      </div>

      
      <div class="row">
        @isset ($userdetail->unit_title)
        <div class="col-xs-6">
          <strong>Unit:</strong><br>{{$userdetail->unit_title}}<br><br>
        </div>
        @endisset

        @isset ($userdetail->unit_code)
        <div class="col-xs-6">
          <strong>Unit Code:</strong><br>{{$userdetail->unit_code}}<br><br>
        </div>
        @endisset
      </div>
      
      <div class="row">
        @isset ($userdetail->project_title)
        <div class="col-xs-6">
          <strong>Project title:</strong><br>{{$userdetail->project_title}}<br><br>
        </div>
        @endisset

        @isset ($userdetail->project_code)
        <div class="col-xs-6">
          <strong>Project Ref Number:</strong><br>{{$userdetail->project_code}}<br><br>
        </div>
        @endisset
      </div>

      <div class="row">
        <div class="col-xs-6">
          <strong>Storage Location:</strong><br>{{$userdetail->storage_location}}<br><br>
        </div>
      
        <div class="col-xs-6">
          <strong>Name of Keeper:</strong><br>{{$userdetail->keeper_name}}<br><br>
        </div>
      </div>

      
      @endforeach
      
      
      <div class="row">
        <div class="col-xs-12">
          <table class="table table-bordered">
            
            <thead>
              <tr>
                <th>Name</th>
                <th>Risk Level</th>
                <th>Volume</th>
                <th>Quantity</th>
              </tr>
            </thead>
            
            <tbody>
              @foreach ($notify as $notification)
              <tr>
                <td>{{ $notification->item_name }} </td>
                <td>{{ $notification->risk_level }}</td>
                <td>{{ $notification->quantity }}</td>
                <td>{{ $notification->volume }}</td>
                
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