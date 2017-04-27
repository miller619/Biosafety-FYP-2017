@extends('layouts.app')
@section('title',  '| OHS')
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
            <h3>PLEASE FILL OUT ALL INFORMATION REQUESTED</h3>
            <div class="row">
                <div class="col-xs-12">
                    <div class="well">
                        
                        {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        
                        <fieldset>
                            
                            <legend>SECTION 1 -Person Completing Form Detail</legend>
                            <div class="row first">
                                <div class="col-xs-6">
                                    <p>
                                        <!-- Company -->
                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                {!! Form::label('company', 'Company/Department:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-8">
                                                {!! Form::text('company', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter text']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                <!-- Date -->
                                <div class="col-xs-6">
                                    <p>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                {!! Form::label('date', 'Date:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-10">
                                                {!! Form::text('date', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter text']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row second">
                                <div class="col-xs-6">
                                    <p>
                                        <!-- Process or Location -->
                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                {!! Form::label('Process', 'Process/Location:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-8">
                                                {!! Form::text('company', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter text']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                <!-- Conducted by -->
                                <div class="col-xs-6">
                                    <p>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                {!! Form::label('conducted', 'Conducted by:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-10">
                                                {!! Form::text('conducted', $value = null, ['class' => 'form-control', 'placeholder' => 'Name and Designation']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row third">
                                <div class="col-xs-6">
                                    <p>
                                        <!-- Approved -->
                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                {!! Form::label('Approved', 'Approved by:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-8">
                                                {!! Form::text('approved', $value = null, ['class' => 'form-control', 'placeholder' => 'Name and Designation']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                <!-- Date -->
                                <div class="col-xs-6">
                                    <p>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                {!! Form::label('date', 'Date:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-10">
                                                {!! Form::text('date', $value = null, ['class' => 'form-control', 'placeholder' => 'From...To...']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row fourth">
                                <div class="col-xs-6">
                                    <p>
                                        <!-- Review date -->
                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                {!! Form::label('Review', 'Review date:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-8">
                                                {!! Form::text('review', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                <!-- Date -->
                                <div class="col-xs-6">
                                    <p>
                                        <div class="form-group">
                                            <div class="col-xs-2">
                                                {!! Form::label('doc', 'Doc No:', ['class' => 'col-lg-2 control-label']) !!}
                                            </div>
                                            <div class="col-xs-10">
                                                {!! Form::text('doc', $value = null, ['class' => 'form-control', 'placeholder' => 'OHS/F/4.5.X']) !!}
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <div class="row fifth">
                                
                                <table id="bio" class="display" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th colspan="4">1. Hazard Identification</th>
                                            <th colspan="4">2. Risk Analysis</th>
                                            <th colspan="2">3. Risk Control</th>
                                        </tr>
                                        <tr>
                                            <td size="1">No</td>
                                            <td size="10">Woork activity</td>
                                            <td size="9">Hazard</td>
                                            <td size="10">Which can cause/effect</td>
                                            <td size="10">Existing Risk Control (if any)</td>
                                            <td size="1">LLH</td>
                                            <td size="1">SEV</td>
                                            <td size="1">RR</td>
                                            <td size="10">Rscommend Control Measure</td>
                                            <td size="7">PIC(Due date/status)</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input id="row-1-no" name="row-1-no" type="text" size="1"></td>
                                            <td><input id="row-1-work" name="row-1-work"  type="text" size="10"></td>
                                            <td><input id="row-1-hazard" name="row-1-hazard"  type="text" size="9"></td>
                                            <td><input id="row-1-cause" name="row-1-cause"  type="text" size="10"></td>
                                            <td><input id="row-1-exist" name="row-1-exist"  type="text" size="10"></td>
                                            <td><input id="row-1-llh" name="row-1-llh"  type="text" size="1"></td>
                                            <td><input id="row-1-sev" name="row-1-sev"  type="text" size="1"></td>
                                            <td><input id="row-1-rr" name="row-1-rr"  type="text" size="1"></td>
                                            <td><input id="row-1-rec" name="row-1-rec"  type="text" size="10"></td>
                                            <td><input id="row-1-pic" name="row-1-pic"  type="text" size="7"></td>
                                        </tr>
                                        <tr>
                                            <td><input id="row-2-no" name="row-2-no"  type="text" size="1"></td>
                                            <td><input id="row-2-work" name="row-2-work"  type="text" size="10"></td>
                                            <td><input id="row-2-hazard" name="row-2-hazard"  type="text" size="9"></td>
                                            <td><input id="row-2-cause" name="row-2-cause"  type="text" size="10"></td>
                                            <td><input id="row-2-exist" name="row-2-exist"  type="text" size="10"></td>
                                            <td><input id="row-2-llh" name="row-2-llh"  type="text" size="1"></td>
                                            <td><input id="row-2-sev" name="row-2-sev"  type="text" size="1"></td>
                                            <td><input id="row-2-rr" name="row-2-rr"  type="text" size="1"></td>
                                            <td><input id="row-2-rec" name="row-2-rec"  type="text" size="10"></td>
                                            <td><input id="row-2-pic" name="row-2-pic" type="text" size="7"></td>
                                        </tr>
                                        <tr>
                                            <td><input id="row-2-no" name="row-2-no"  type="text" size="1"></td>
                                            <td><input id="row-2-work" name="row-2-work"  type="text" size="10"></td>
                                            <td><input id="row-2-hazard" name="row-2-hazard"  type="text" size="9"></td>
                                            <td><input id="row-2-cause" name="row-2-cause"  type="text" size="10"></td>
                                            <td><input id="row-2-exist" name="row-2-exist"  type="text" size="10"></td>
                                            <td><input id="row-2-llh" name="row-2-llh"  type="text" size="1"></td>
                                            <td><input id="row-2-sev" name="row-2-sev"  type="text" size="1"></td>
                                            <td><input id="row-2-rr" name="row-2-rr"  type="text" size="1"></td>
                                            <td><input id="row-2-rec" name="row-2-rec"  type="text" size="10"></td>
                                            <td><input id="row-2-pic" name="row-2-pic" type="text" size="7"></td>
                                        </tr>
                                        <tr>
                                            <td><input id="row-2-no" name="row-2-no"  type="text" size="1"></td>
                                            <td><input id="row-2-work" name="row-2-work"  type="text" size="10"></td>
                                            <td><input id="row-2-hazard" name="row-2-hazard"  type="text" size="9"></td>
                                            <td><input id="row-2-cause" name="row-2-cause"  type="text" size="10"></td>
                                            <td><input id="row-2-exist" name="row-2-exist"  type="text" size="10"></td>
                                            <td><input id="row-2-llh" name="row-2-llh"  type="text" size="1"></td>
                                            <td><input id="row-2-sev" name="row-2-sev"  type="text" size="1"></td>
                                            <td><input id="row-2-rr" name="row-2-rr"  type="text" size="1"></td>
                                            <td><input id="row-2-rec" name="row-2-rec"  type="text" size="10"></td>
                                            <td><input id="row-2-pic" name="row-2-pic" type="text" size="7"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><br>
                            
                            <!-- Submit Button -->
                            <!-- <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                </div>
                            </div> -->

                            
                        </fieldset>

                        
                         <button type="submit" class="btn btn-primary">Submit</button>
                       
                        </form>
                        {!! Form::close()  !!}
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@stop