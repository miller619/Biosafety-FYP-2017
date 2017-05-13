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
              <li><a href="{{ url('/home/lmocontent/lmoFormA') }}">Annex2</a></li>
              <li><a href="{{ url('/home/lmocontent/lmoFormF') }}">Form E</a></li>
              <li><a href="{{ url('/home/lmocontent/lmoFormB') }}">SBC Application for NRLDs suitable for PC1</a></li>
              <li><a href="{{ url('/home/lmocontent/lmoFormC') }}">SBC Application for NRLDs suitable for PC2</a></li>
              <li><a href="{{ url('/home/lmocontent/lmoFormD') }}">OHS - HIRARC</a></li>
              <li><a href="{{ url('/home/lmocontent/lmoFormE') }}">SSBC_001 Safe Work Procedure</a></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    
  </div>
  @stop