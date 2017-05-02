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
    <div class="page-content inset">
      <div class="row">
        <div col-xs-12><button type="button" >Add User</button></div>
        <div class="col-xs-12">
          
          <table class="table table-border">
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
                <td><button type="button" >Edit</button></td>
                <td><button type="button"><a href="{{ url('admin/userList') }}"> Delete</a></button></td>
              </tr>
            </tbody>
            @endforeach
          </table>

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            @foreach ($admins as $admin)
            <tbody>
              <tr>
                <td>{{$admin->name}}</td>
                <td>{{$admin->email}}</td>
                <td>{{$admin->created_at}}</td>
                <td><button type="button" >Edit</button></td>
                <td><button type="button" >Delete</button></td>
              </tr>
            </tbody>
            @endforeach
          </table>
          
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