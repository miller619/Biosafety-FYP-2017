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
    @include('includes.sidebar')
  </div>
  
  <!-- Page content -->
  <div id="page-content-wrapper">
    <!-- Keep all page content within the page-content inset div! -->
    <div class="page-content inset">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li><a href="{{ url('home/notification/personal_information_notification_form') }}">Click Here for New Notification</a></li>
          </ul>
          
        </div>
      </div>

      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs" role="tablist">
                  <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">On Review</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Approved Notification</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" data-toggle="tab" href="#panel3" role="tab">Declined Approvals</a>
                  </li>
            </ul>

            <div class="tab-content card">
              <!--Panel 1-->
                  <div class="tab-pane fade" id="panel1" role="tabpanel">
                    <br>
                        <h2>Notification Sent and Waiting for Approval</h2>
                          <div class="row">
                            <div class="col-xs-12">
                              <table class="table table-bordered">
                                <thead>
                                  <tr>
                                    <td>Notification ID</td>
                                    <td>Name of Applicant</td>
                                    <td>Applied date</td>
                                    <td>Approved</td>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($data['notifications'] as $notification)
                                  
                                  <tr>
                                    <td>{{ $notification->id }}</td>
                                    <td><a href="/home/notification/notification_application/{{$notification->user->id}}/{{$notification->id}}">{{ $notification->user->name }}</a></td>
                                    <td>{{$notification->created_at->todatestring()}}</td>
                                    <td>Approval Pending</td>
                                  </tr>
                                  
                                  @endforeach
                                </tbody>
                              </table>
                            </div>
                          </div>
                  </div>

                  <!--Panel 2-->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                       <h2>Approved Notification</h2>
                        <div class="row">
                          <div class="col-xs-12">
                            <table class="table table-bordered">
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
                                  <td><a href="/home/notification/notification_application/{{$approvednotification->user->id}}/{{$approvednotification->id}}">{{ $approvednotification->user->name }}</a></td>
                                  <td>{{$approvednotification->created_at->todatestring()}}</td>
                                  <td>Approved</td>
                                  <td>{{$approvednotification->created_at->todatestring()}}</td>
                                </tr>
                                
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                    </div>

                    <!--Panel 3-->
                  <div class="tab-pane fade" id="panel3" role="tabpanel">
                    <h2>Approval Declined</h2>
                    <div class="row">
                      <div class="col-xs-12">
                        <table class="table table-bordered">
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
                            @foreach($declined['declinedData'] as $declinednotification)
                            
                            <tr>
                              <td>{{ $declinednotification->id }}</td>
                              <td><a href="/home/notification/notification_application/{{$declinednotification->user->id}}/{{$declinednotification->id}}">{{ $declinednotification->user->name }}</a></td>
                              <td>{{$declinednotification->created_at->todatestring()}}</td>
                              <td>Approved</td>
                              <td>{{$declinednotification->created_at->todatestring()}}</td>
                            </tr>
                            
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                  
                  </div>

            </div>
        </div>
      </div>




    
  </div>
  @stop