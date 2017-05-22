@extends('layouts.app')
@section('title',  '| User Profile')
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
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Name:</strong>
            {{ $user->name}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Email:</strong>
            {{ $user->email}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Contact Number:</strong>
            {{ $user->userContact}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Designation:</strong>
            {{ $user->userDesignation}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Institute:</strong>
            {{ $user->userInstitution}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Faculty:</strong>
            {{ $user->userFaculty}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Address:</strong>
            {{ $user->userAddress}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Fax:</strong>
            {{ $user->userFax}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Swinburne ID:</strong>
            {{ $user->userInstitutionID}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <a class="btn btn-primary" href="{{ route('profile.edit',$user->id) }}">Edit</a>
        </div>
      </div>


      <div class="row">
        <div class="col-xs-12">
          <a class="btn btn-primary" href="{{ route('show.change_password_form',$user->id) }}">change Password</a>
        </div>
      </div>

    </div>
  </div>
</div>
@stop