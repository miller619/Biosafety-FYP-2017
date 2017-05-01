<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Final Report for Biohazardous materials</title>
</head>
 
<body>

<div class="container">

<h2>Swinburne Biosafety Commitee</h2>
<h3>Annual/Final report foe use of Biohazardous materials</h3>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

    <div class="row">
        <table id="bio" class="table table-bordered" width="100%" cellspacing="0">
        <tbody>
            <tr>
                <td colspan="2">SBC REFERENCE NUMBER: <br><input id="row-1-no" name="row-1-no" type="text" ></td>
            </tr>
            <br>
            <tr>
            	<td>DATE OF PROJECT APPROVAL:<br><input id="row-1-no" name="row-1-no" type="text" ></td>
            	<td>DATE OF THIS REPORT:<br><input id="row-1-no" name="row-1-no" type="text" ></td>
            </tr>
            <tr>	
            	<td colspan="2">ANNUAL/FINAL REPORT (Delete as applicable):<br><input id="row-1-no" name="row-1-no" type="text" ></td>
            </tr>
        </tbody>
        </table>
    </div>

    <fieldset>
        <legend>1. Title of project</legend>
        <div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::text('company', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>2. Chief Investigator</legend>
        <div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::text('company', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>3. Personnel</legend>
        <p>Project Supervisor(must be a Swinburne staff member)</p>

        <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
                	<div class="col-xs-12">
                    {!! Form::label('add', 'a) Are there additional personnel?', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('add', $value = null, ['class' => 'form-control', 'placeholder' => 'Yes/No']) !!}<br>
                    <p>(If Yes, fill in details below)</p>
                    </div>
                    <br>
                    <div class="col-xs-4">
                    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('title', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('current', 'Current Qualifications:', ['class' => ' control-label']) !!} <br>
                    {!! Form::text('Current qualifications', $value = null, ['class' => 'form-control' , 'placeholder' => 'Please include all']) !!}
                    </div>
                    <br>
                    <div class="col-xs-8">
                    {!! Form::label('department', 'Department:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('department', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('campus', 'Campus:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('campus', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('address', 'Full postal address (including internal:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('address', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-8">
                    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('phone', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('fax', 'Fax:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('fax', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('email', $value = null, ['class' => 'form-control' ,'placeholder' => 'MUST be staff email address']) !!}
                    </div>

                    <div class="col-xs-12">
                    {!! Form::label('left', 'b) Have any personnel left ?', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('left', $value = null, ['class' => 'form-control', 'placeholder' => 'Yes/No']) !!}<br>
                    <p>(If Yes, fill in details below)</p>
                    </div>

                </div>
            
            </div>
        </div>

        </fieldset>

        <fieldset>
        <legend>4. Project Summary</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::textarea('summary', $value = null, ['class' => 'form-control', 'rows' => 3, 'placeholder' => 'Briefly restate the purpose of the project (This should ve written in plain English, 150) words max']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>5. Outline the progress made in achieving the specific purpose of the project</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    
                    {!! Form::textarea('outline', $value = null, ['class' => 'form-control','rows' => 3, 'placeholder' => 'If the project has not yet commenced, briefly explain why.']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>6. Have there been any reportable incidences in the last 12 months</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    
                    {!! Form::textarea('reportable', $value = null, ['class' => 'form-control','rows' => 3, 'placeholder' => 'If yes, please briefly describe the incident and the actions taken']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>7. Provide a list of any additional SOPs and RISK Assessments used since Biosafety clearence.</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::textarea('additional', $value = null, ['class' => 'form-control','rows' => 4, 'placeholder' => 'Attach all to application']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>8. Changes to Facilities</legend>
        <div class="row">
            <div class="col-xs-12">

            	<div class="col-xs-12">
                    {!! Form::label('yesorno', 'Yes/No:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('left', $value = null, ['class' => 'form-control']) !!}<br>
                    <p>(If Yes, fill in details below)</p>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('building', 'Building number:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('building', $value = null, ['class' => 'form-control', 'placeholder' => 'Attach all to application']) !!}
                    </div>
                    <div class="col-xs-6">
                     {!! Form::label('room', 'Room number:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('room', $value = null, ['class' => 'form-control', 'placeholder' => 'Attach all to application']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>9. Sign-off</legend>
        <p>(Name and Signature)</p>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('chief:', 'Chief Investigator:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('building', $value = null, ['class' => 'form-control','rows' => 4]) !!}
                    </div>
                    <div class="col-xs-6">
                     {!! Form::label('manager', 'Lab Manager/Biosafety Officer:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('room', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>






</div>
</div>
</body>
</html>

