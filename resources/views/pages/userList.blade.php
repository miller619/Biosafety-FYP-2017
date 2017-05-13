@extends('layouts.app')
@section('title',  '| User List')
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
      
      <a class="btn btn-success" href="{{ route('admin.profile.create') }}"> Create New user</a>
      <div class="row">
        <div class="col-xs-12">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Institution</th>
                <th>Institution ID</th>
                <th>Fax</th>
                <th>Faculty</th>
                <th>Designation</th>
                <th>Address</th>
                <th>Date Created</th>
                <th>Delete</th>
              </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
              <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->userContact}}</td>
                <td>{{$user->userInstitution}}</td>
                <td>{{$user->userInstitutionID}}</td>
                <td>{{$user->userFax}}</td>
                <td>{{$user->userFaculty}}</td>
                <td>{{$user->userDesignation}}</td>
                <td>{{$user->userAddress}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                  {!! Form::open(['method' => 'DELETE','route' => ['profile.destroy', $user->id],'style'=>'display:inline']) !!}
                  {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                  {!! Form::close() !!}
                </td>
              </tr>
            </tbody>
            @endforeach
            
          </table>
        </div>
      </div>
      
    </div>
  </div>
</div>
@endsection