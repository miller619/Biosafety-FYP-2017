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
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Nam:</strong>
            {{$userdetail->user->name}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Staff/Student ID: </strong>
            {{$userdetail->user->userInstitutionID}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Designation:</strong>
            {{$userdetail->user->userDesignation}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Faculty:</strong>
            {{$userdetail->user->userFaculty}}
          </div>
        </div>
      </div>
      @isset ($userdetail->unit_title)
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Unit:</strong>
            {{$userdetail->unit_title}}
          </div>
        </div>
      </div>
      @endisset
      @isset ($userdetail->unit_code)
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Unit Code:</strong>
            {{$userdetail->unit_code}}
          </div>
        </div>
      </div>
      @endisset
      @isset ($userdetail->project_title)
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Project title:</strong>
            {{$userdetail->project_title}}
          </div>
        </div>
      </div>
      @endisset
      @isset ($userdetail->project_code)
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Project Ref Number:</strong>
            {{$userdetail->project_code}}
          </div>
        </div>
      </div>
     @endisset 
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Storage Location:</strong>
            {{$userdetail->storage_location}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Name of Keeper:</strong>
            {{$userdetail->keeper_name}}
          </div>
        </div>
      </div>
      @endforeach
      
      
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            
            <thead>
              <tr>
                <td>Name</td>
                <td>Risk Level</td>
                <td>Volume</td>
                <td>Quantity</td>
              </tr>
            </thead>
            
            <tbody>
              @foreach ($notify as $notification)
              <tr>
                <td>{{ $notification->item_name }} </td>
                <td>{{ $notification->risk_level }}</td>
                <td>{{ $notification->quantity }}</td>
                <td>{{ $notification->volume }}</td>
                <td></td>
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