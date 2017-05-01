<html>
 
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>IBC/IR/10/ANNEX3</title>
</head>
 
<body>

<div class="container">

<h3>IBC/IR/10/ANNEX3</h3>
<h2>INSTITUTIONAL BIOSAFETY COMMITTEE
INCIDENT REPORTING FORM</h2>

<p>To be completed by the Principal Investigator/Laboratory personnel involved in the incident.
This form is to be used by the BSO to report all incidents which did not result in injury.
Please complete and submit to the IBC within 24 hours and to the NBB within 48
hours of the incident.</p>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

    <div class="row">
        <div class="col-xs-12">
        	<div class="form-group">
                    <div class="col-xs-4">
                    {!! Form::label('ref', 'Reference No.:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('ref', $value = null, ['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-4">
                    {!! Form::label('organisation', 'ORGANISATION:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('organisation', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('lab', 'LABORATORY:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('lab', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-4">
                    {!! Form::label('lab', 'DATE & TIME OF INCIDENT:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('lab', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-4">
                    {!! Form::label('faculty', 'FACULTY/DEPARTMENT:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('faculty', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
    </div>

    <fieldset>
    	<legend>PI/ Laboratory Personnel Information</legend>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('name', 'PI/ Laboratory Personnel’s Name:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('tel', 'Telephone:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('tel', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('date', 'The incident was reported on Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('time', 'Time:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('time', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
    	</div>
    </fieldset>

    <fieldset>
    	<legend>IDENTIFY THE DIRECT AND CONTRIBUTING CAUSES OF THE INCIDENT</legend>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('describe', '1. Describe the incident (use appendix if necessary):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('describe', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('cause','2. Probable cause or causes of incident (tick 1 or more boxes for appropriate answers):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('cause', $value = null, ['class' => 'form-control']) !!}
                    </div>
             
                </div>
            </div>
    	</div>

        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('probable', 'The incident was reported on Date:', ['class' => 'control-label']) !!}
                    <br>
                    <div class="checkboxgroup">
                        <input type="checkbox" value="fault" id="fault">Fault of equipment<br>
                        <input type="checkbox" value="equipment" id="equipment">Equipment unavailable<br>
                        <input type="checkbox" value="poor" id="poor">Poor storage<br>
                        <input type="checkbox" value="weather" id="weather">Weather<br>
                        <input type="checkbox" value="assistance" id="assistance">Assistance unavailable<br>
                        <input type="checkbox" value="electrical" id="electricity">Electrical fault<br>
                        <input type="checkbox" value="Carelessness" id="Carelessness">Carelessness<br>
                        <input type="checkbox" value="terrain" id="terrain">Terrai
                    </div>
                        <br>
                        <br>
                  
                    </div>
                    <div class="col-xs-6">
                    
                    <br>
                        <input type="checkbox" value="inadequate" id="inadequate">Inadequate workspace<br>
                        <input type="checkbox" value="lack" id="lack">Lack of training<br>
                        <input type="checkbox" value="poor" id="poor">Poor access<br>
                        <input type="checkbox" value="unknown" id="unknown">Unknown<br>
                        <input type="checkbox" value="fault" id="fault">Fault and maintenance staff / engineer<br>
                        <input type="checkbox" value="lattention" id="lattention">Lack of attention / supervision<br>
                        <input type="checkbox" value="incorrect" id="incorrect">Incorrect method / work practices<br>
                        <input type="checkbox" value="none" id="none">None of the above
                        <br>
                        <br>
                    </div>

                </div>
            </div>
        </div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('experiment', '3. Did the incident contribute to any release or dispersal of LMO/rDNA materials outside the containment/ field experiment area?', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('experiment', $value = null, ['class' => 'form-control','placeholder' => 'If “Yes”, please state the emergency response plan taken.', 'rows' => 4]) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('tools', '4. What act(s) by the staff and/or others contributed to the incident (e.g. wrong tool or equipment, improper position or placement, work rule violation, failed to follow instructions, etc.)?', ['class' => 'control-label']) !!} 
                    <br>
                    {!! Form::textarea('tools', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('factors', '5. What personal factors contributed to the incident (e.g. improper attitude, fatigue, inattention, substance abuse, failing to wear PPE etc.)?', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('factors', $value = null, ['class' => 'form-control','rows' => 4]) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('corrective', '6. What corrective actions have been or will be taken oprevent a recurrence of this type of incident (e.g. repair / modify / replace equipment, counseling,training, policies, procedures, etc.)?', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('corrective', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('responsible', '7. Who is responsible to implement corrective actions?', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('responsible', $value = null, ['class' => 'form-control','rows' => 4]) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<hr>
    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::textarea('sigInves', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    {!! Form::label('sigInves', 'Signature of Principal Investigator', ['class' => 'control-label']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::textarea('sigbio', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    {!! Form::label('sigbio', 'Signature of Biosafety Officer', ['class' => 'control-label']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::textarea('sigibc', $value = null, ['class' => 'form-control', 'rows' => 4]) !!}
                    {!! Form::label('sigibc', 'Signature of IBC Chair', ['class' => 'control-label']) !!}
                    </div>
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    <p>Send a copy to NBB, <br>
                    	Department of Biosafety,<br>
						Ministry of Natural Resources & Environment,<br>
						Level 1, Podium 2,<br>
						Precinct 4, 62574 Putrajaya.<br>
						Tel: 03-88861580 Fax: 03-88904935</p>
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