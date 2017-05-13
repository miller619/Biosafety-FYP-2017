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
              <li><a href="{{ url('/home/accidentlmo/MinorAccidentForm') }}">Minor Biological Incident or Accident</a></li>
              <li><a href="{{ url('/home/accidentlmo/MajorAccidentform') }}">major Biological Incident or Accident</a></li>
              <li><a href="{{ url('/home/accidentlmo/OHSAccidentForm') }}">Occupational Disease or Exposure</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
@stop