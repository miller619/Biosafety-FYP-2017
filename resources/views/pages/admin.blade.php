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
        <div class="col-xs-12">
          @foreach ($users as $user)
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th>Approve Login</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->created_at}}</td>
                <td><button type="button" data-user-id="{{$user->loginapproval}}" class="btn btn-primary" id="j-approve-user" onclick="approveLogin()">Approve</button></td>
              </tr>
            </tbody>
          </table>
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          @foreach ($usersApproved as $userap)
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{{$userap->name}}</td>
                <td>{{$userap->email}}</td>
                <td>{{$userap->created_at}}</td>
              </tr>
            </tbody>
          </table>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  
</div>
@endsection