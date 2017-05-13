@extends('layouts.app')
@section('title',  '| Homepage')
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
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Register</div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                            <div class="alert alert-success">{{Session::get('message')}}</div>
                            @endif
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('profile.user') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                        @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userContact') ? ' has-error' : '' }}">
                                    <label for="userContact" class="col-md-4 control-label">Contact Number</label>
                                    <div class="col-md-6">
                                        <input id="userContact" type="text" class="form-control" name="userContact" value="{{ old('userContact') }}" required>
                                        @if ($errors->has('userContact'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userContact') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userAddress') ? ' has-error' : '' }}">
                                    <label for="userAddress" class="col-md-4 control-label">Address</label>
                                    <div class="col-md-6">
                                        <input id="userAddress" type="text" class="form-control" name="userAddress" value="{{ old('userAddress') }}" required>
                                        @if ($errors->has('userAddress'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userAddress') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userFax') ? ' has-error' : '' }}">
                                    <label for="userFax" class="col-md-4 control-label">Fax number</label>
                                    <div class="col-md-6">
                                        <input id="userFax" type="text" class="form-control" name="userFax" value="{{ old('userFax') }}" required>
                                        @if ($errors->has('userFax'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userFax') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userInstitution') ? ' has-error' : '' }}">
                                    <label for="userInstitution" class="col-md-4 control-label">Institution</label>
                                    <div class="col-md-6">
                                        <input id="userInstitution" type="text" class="form-control" name="userInstitution" value="{{ old('userInstitution') }}" required>
                                        @if ($errors->has('userInstitution'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userInstitution') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userDesignation') ? ' has-error' : '' }}">
                                    <label for="userDesignation" class="col-md-4 control-label">Designation</label>
                                    <div class="col-md-6">
                                        <input id="userDesignation" type="text" class="form-control" name="userDesignation" value="{{ old('userDesignation') }}" required>
                                        @if ($errors->has('userDesignation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userDesignation') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userFaculty') ? ' has-error' : '' }}">
                                    <label for="userFaculty" class="col-md-4 control-label">Faculty</label>
                                    <div class="col-md-6">
                                        <input id="userFaculty" type="text" class="form-control" name="userFaculty" value="{{ old('userFaculty') }}" required>
                                        @if ($errors->has('userFaculty'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userFaculty') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('userInstitutionID') ? ' has-error' : '' }}">
                                    <label for="userInstitutionID" class="col-md-4 control-label">Institution ID</label>
                                    <div class="col-md-6">
                                        <input id="userInstitutionID" type="text" class="form-control" name="userInstitutionID" value="{{ old('userInstitutionID') }}" required>
                                        @if ($errors->has('userInstitutionID'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('userInstitutionID') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>
                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                        Register
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@stop