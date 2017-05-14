@extends('layouts.app')
@section('title',  '| Notification')
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
          <ul>
            <h1>Notifications</h1>
          </ul>
          
        </div>
      </div>
      @foreach ($admin['admins'] as $admin)
      @endforeach
      @if ($admin->adminRole == 1)
      <h2>New Application</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Notification ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
              </tr>
            </thead>
            <tbody>
              @foreach ($data['notifications'] as $notification)
              <tr>
                <td>{{ $notification->id }}</td>
                <td><a href="/admin/notification_list/notification_application/{{$notification->user->id}}/{{$notification->id}}">{{ $notification->user->name }}</a></td>
                <td>{{$notification->created_at->todatestring()}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      @endif
      
      <br/>
      <h2>Pending Approval from Super Admin</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Notification ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
              </tr>
            </thead>
            <tbody>
              @foreach($sendData['sendnotifications'] as $send)
              
              <tr>
                <td>{{ $send->id }}</td>
                <td><a href="/admin/notification_list/notification_application/{{$send->user->id}}/{{$send->id}}">{{ $send->user->name }}</a></td>
                <td>{{$send->created_at->todatestring()}}</td>
                <td>Approval Pending</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <br/>
      
      <h2>Approved Application</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Notification ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
                <td>Approved Date</td>
              </tr>
            </thead>
            <tbody>
              @foreach($approvedData['approvednotifications'] as $approvednotification)
              
              <tr>
                <td>{{ $approvednotification->id }}</td>
                <td><a href="/admin/notification_list/notification_application/{{$approvednotification->user->id}}/{{$approvednotification->id}}">{{ $approvednotification->user->name }}</a></td>
                <td>{{$approvednotification->created_at->todatestring()}}</td>
                <td>Approved</td>
                <td>{{$approvednotification->updated_at->todatestring()}}</td>
              </tr>
              
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <h2>Declined Application</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Notification ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
                <td>Approved Date</td>
              </tr>
            </thead>
            <tbody>
              @foreach($declined['declinedData'] as $decline)
              
              <tr>
                <td>{{ $decline->id }}</td>
                <td><a href="/admin/notification_list/notification_application/{{$decline->user->id}}/{{$decline->id}}">{{ $decline->user->name }}</a></td>
                <td>{{$decline->created_at->todatestring()}}</td>
                <td>Declined</td>
                <td>{{$decline->updated_at->todatestring()}}</td>
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