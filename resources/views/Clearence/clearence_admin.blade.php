@extends('layouts.app')
@section('title',  '| Clearence')
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
            <h1>Clearence</h1>
          </ul>
          
        </div>
      </div>
      @foreach ($admin['admin'] as $adm)
      @endforeach
      @if ($adm->adminRole == 1)
      <h2>New Applications</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
              </tr>
            </thead>
            <tbody>
          @foreach($clearence['clearence'] as $clearence)    
              <tr>
                <td>{{ $clearence->id}}</td>
                <td><a href="/admin/clearence_list/Clearence_application/{{$clearence->user->id}}/{{$clearence->id}}">{{ $clearence->user->name}}</a></td>
                <td>{{ $clearence->created_at}}</td>
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
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
              </tr>
            </thead>
            <tbody>
              
          @foreach($sendData['sendData'] as $send)    
              <tr>
                <td>{{$send->id}}</td>
                <td><a href="/admin/clearence_list/Clearence_application/{{$send->user->id}}/{{$send->id}}">{{ $send->user->name}}</a></td>
                <td>{{ $send->created_at}}</td>
                <td>Approval Pending</td>
              </tr>
          @endforeach   
              
            </tbody>
          </table>
        </div>
      </div>
      <br/>
      
      <h2>Approved Applications</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Approved</td>
                <td>Approved Date</td>
              </tr>
            </thead>
            <tbody>
              
          @foreach($approvedData['approvedData'] as $appData)    
              <tr>
                <td>{{$appData->id}}</td>
                <td><a href="">{{$appData->user->name}}</a></td>
                <td>{{ $appData->created_at}}</td>
                <td>Approved</td>
                <td>{{ $appData->updated_at}}</td>
              </tr>
          @endforeach    
              
            </tbody>
          </table>
        </div>
      </div>

      <h2>Declined Applications</h2>
      <div class="row">
        <div class="col-xs-12">
          <table border="1">
            <thead>
              <tr>
                <td>Clearence ID</td>
                <td>Name of Applicant</td>
                <td>Applied date</td>
                <td>Declined</td>
                <td>Declined Date</td>
              </tr>
            </thead>
            <tbody>
              
              
          @foreach($declined['declined'] as $dec)    
              <tr>
                <td>{{$dec->id}}</td>
                <td><a href="">{{$dec->user->name}}</a></td>
                <td>{{ $dec->created_at}}</td>
                <td>Declined</td>
                <td>{{ $dec->updated_at}}</td>
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