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
              <li><a href="{{ url('/home/edcontent/EDFormA') }}">OHS-F-4.5.X HIRARC Form</a></li>
              <li><a href="{{ url('/home/edcontent/EDFormB') }}">SBC-Application for Biosafety Clearance for use of Exempt Dealings</a></li>
              <li><a href="{{ url('/home/edcontent/EDFormC') }}">SSBC_001 Safe Work Procedure V2</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
  @stop