@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                @if(Session::has('message'))
                    <div class="alert alert-success">{{Session::get('message')}}</div> 
                @endif
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('admin/userList') }}">
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
                        <div class="form-group{{ $errors->has('userRole') ? ' has-error' : '' }}">
                            <label for="userRole" class="col-md-4 control-label">Designation</label>
                            <div class="col-md-6">
                                <input id="userRole" type="text" class="form-control" name="userRole" value="{{ old('userRole') }}" required>
                                @if ($errors->has('userRole'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('userRole') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('userProgram') ? ' has-error' : '' }}">
                            <label for="userProgram" class="col-md-4 control-label">Program Enrolled</label>
                            <div class="col-md-6">
                                <input id="userProgram" type="text" class="form-control" name="userProgram" value="{{ old('userProgram') }}" required>
                                @if ($errors->has('userProgram'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('userProgram') }}</strong>
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
@endsection
