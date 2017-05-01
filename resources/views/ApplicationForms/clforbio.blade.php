<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Clearence</title>
</head>
 
<body>

<div class="container">

<h2>Swinburne Bio Safety Committee</h2>
<h3>Application for biosafety clearance for use of Biohazardous materials</h3>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
 
    
    <div class="row">
        <table id="t1" class="table table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>DATE RECEIVED</th>
                <th>SBC REFERENCE NUMBER</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><input id="row-1-no" name="row-1-no" type="text" ></td>
                <td><input id="row-1-no" name="row-1-no" type="text" ></td>
            </tr>
        </tbody>
        </table>
    </div>

    <br>
        <fieldset>
        <legend>1. Title of the project</legend>
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
        <legend>2. Researchers involved in the conduct of the project</legend>
        <p>Project Supervisor(must be a Swinburne staff member)</p>

        <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
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



                </div>
            
            </div>
        </div>

        </fieldset>


        <br>

        <!-- Additional people to be included in correspondence regarding this dealing-->
        <fieldset>
            <legend>3. Additional people to be included in correspondence regarding this dealing</legend>
            <p>e.g. Research Assistants, Biosafety Officers, Facility Managers</p>

            <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
                    
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
                </div>
            
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
                    
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
                    {!! Form::text('summary', $value = null, ['class' => 'form-control', 'placeholder' => 'Briefly describe the project, including background, aims and methods. (This should be witten in plain English)']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>5. What are the possible hazard(s) or risk(s) involved?</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    
                    {!! Form::text('hazards', $value = null, ['class' => 'form-control', 'placeholder' => 'If your work involves an exempt dealing - clarify why it is exempt']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
        <legend>6. Provide a list of the SOPs and Risk Assessments to be used.</legend>
        <div class="row">
            <div class="col-xs-12">
            
            
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::text('sop', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            
            </div>
        </div>
        </fieldset>

        <fieldset>
            <legend>7. Facilities to be used</legend>

            <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('building', 'Building number:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('building', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('room', 'Room Number', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('room', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('containment', 'Containment number:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('containment', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('certificate', 'Certificate Number:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('certificate', $value = null, ['class' => 'form-control']) !!}
                    </div>

                </div>
            
            </div>
        </div>

        </fieldset>

        <fieldset>
            <legend>8. Biosafety Officer(s)/ Lab Manager notification</legend>
            
            <div class="row">
            <div class="col-xs-12">
            
            <!-- Process or Location -->
                <div class="form-group">
                    <div class="col-xs-6">
                    <p>Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the
dealing is to be conducted been made aware of this application</p>
                        <input type="checkbox" value="Yes" id="checkYes">Yes
                        <input type="checkbox" value="No" id="checkNo">No
                    </div>

                    <div class="col-xs-6">
                    {!! Form::label('name', 'Name of biosafety officer(s):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('name', 'Name of Laboratory Manager:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    

                </div>
            
            </div>
        </div>

        </fieldset>

        {!! Form::close()  !!}
        </div>
        </div>
</body>
 
</html>