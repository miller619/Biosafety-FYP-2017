@extends('layouts.app')
@section('title',  '| Update User')
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
        {!! Form::model($user, ['method' => 'PATCH','route' => ['profile.update', $user->id]]) !!}
        @include('user.updateForm')
        {!! Form::close() !!}
      </div>
    </div>
  </div>
  
</div>
@stop