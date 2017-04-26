@extends('layouts.app')
@section('content')
<div id="wrapper" class="active">
  
  <!-- Sidebar -->
  <!-- Sidebar -->
  <div id="sidebar-wrapper">
    <ul id="sidebar_menu" class="sidebar-nav">
      <li class="sidebar-brand">menu</li>
    </ul>
    @include('includes.admin-sidebar')
  </div>
  <!-- Page content -->
  <div id="page-content-wrapper">
    <!-- Keep all page content within the page-content inset div! -->
    <div class="content-fluid">
      <div class="row">
        <div class="col-xs-3 col-xs-push-9">
          <form action="{{ route ('addUser.user')}}" method="POST" >
          {{ csrf_field() }}
            <button type="submit" class="btn btn-primary">Add User</button>
          </form>
          
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                  <a href="#"><button type="button" class="btn btn-primary">Edit</button></a>
                </td>
                <td>
                  <form action="{{ route('delete.user', $user->id) }}" method="POST">
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger">DELETE</button>
                  </form>
                  
                </td>
                }
              </tr>
            </tbody>
            @endforeach
            
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection