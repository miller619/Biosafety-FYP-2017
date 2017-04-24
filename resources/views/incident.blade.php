<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Incident/Accident Report Form</title>
</head>
 
<body>

<div class="container">

<h2>INCIDENT/ACCIDENT REPORT FORM</h2>
<h5>PLEASE FILL OUT ALL INFORMATION REQUEST</h5>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

    <fieldset>
    	<legend>SECTION 1 - Victim Personal Details (*Details required as per OSH (NADOPOD) Regulation 2004)</legend>

    	<div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('name', '1.01 Name (as per I.C / passport):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('employment', '1.05 Employment Designation:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('employment', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('gender', '1.02 Gender:', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="Yes" id="Male">Male
                    	<input type="checkbox" value="Yes" id="Female">Female
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('faculty', '1.06 Faculty/Unit:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('faculty', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('age', '1.03 Age:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('age', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('docid', '1.07 Doc ID:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('docid', $value = null, ['class' => 'form-control', 'placeholder' => 'OHS/F/4.20.X']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('citizenship', '1.04 Citizenship:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('citizenship', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('review', '1.08 Review Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('review', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
           
            </div>
        </div>
    </fieldset>

    <fieldset>
		<legend>SECTION 2 - Incident/Accident Details</legend>
		<div class="row">
            <div class="col-xs-12">
            	<div class="form-group">
            		<div class="col-xs-12">
                    {!! Form::label('date', '2.1 Date of incident:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control',  'placeholder' => 'Click here to enter text']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('time', '2.2 A. Time', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('brief', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter text']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('room', '2.3 Room/Area:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','placeholder' => 'Click here to enter text' ,'rows' => 2]) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('type', '2.4: Type of Incident', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="slips" id="Male">Slips, Trips and Falls
                    	<input type="checkbox" value="unsafe" id="Female">Unsafe Act
                    	<input type="checkbox" value="burns" id="Female">Burns/Fire
                    	<input type="checkbox" value="repetitive" id="Female">Repetitive strain injury
                    	<input type="checkbox" value="cuts" id="Female">Cuts/Laceration
                    	<br>
                    	<input type="checkbox" value="bump" id="Male">Bump/Crash/Impact injury
                    	<input type="checkbox" value="chemical" id="Female">Chemical/Biological Spillage
                    	<input type="checkbox" value="occupational" id="Female">Occupational Health/Illness
                    	<input type="checkbox" value="unsafeworkplace" id="Female">Unsafe Workplace Condition<br><br>
                    	<p>Others (Specify):</p>
                    {!! Form::text('other', $value = null, ['class' => 'form-control','placeholder' => 'Click here to enter text','rows' => 2]) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('injury', '2.5 Any Injury?', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="Yes" id="Male">Yes
                    	<input type="checkbox" value="Yes" id="Female">No
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('requires', '2.6 Requires physician/hospital visit?', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="Yes" id="Male">Yes
                    	<input type="checkbox" value="Yes" id="Female">No
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('date', '2.7 Details of incident:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('details', $value = null, ['class' => 'form-control', 'rows' => 5]) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('actions', '2.8 Actions Taken', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','rows' => 4]) !!}
                    </div>
            	</div>
            </div>
        </div>

	</fieldset>

	<fieldset>
		<legend>SECTION 3 - Reporter Detail</legend>
		<div class="row">
            <div class="col-xs-12">
            	<div class="form-group">
            		<div class="col-xs-12">
                    
                    <ul class="list-group">
                    	<li>I, hereby declare that the information I have provided in this report form for incident/accident is true and correct.</li>
                    	<li>Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice at http://www.swinburne.edu.my/privacy/ and Employee's Privacy Collection Notice at Blackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.</li>
                    </ul>
                   
                    </div>
            		<div class="col-xs-12">
                    {!! Form::label('reported', 'Reported by:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('reported', $value = null, ['class' => 'form-control', 'placeholder' => 'Click here to enter text']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('designation', 'Designation:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('designation', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('Date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <fieldset>
    	<legend>SSECTION 4 – For Investigation Team Only (*Details required as per OSH (NADOPOD) Regulation 2004)
</legend>

    	<div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('victim', '4.1 Any victim?', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="Yes" id="yes">Yes
                    	<input type="checkbox" value="No" id="no">No
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('citizenship', '4.3 Victim’s citizenship:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('citizenship', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('age', '4.2 Victim’s age:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('age', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('', '4.4 Victim’s job description:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('descrition', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('age', '4.5 Investigation Findings:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('age', $value = null, ['class' => 'form-control', 'rows' => 10]) !!}
                    </div>
                    
                </div>
                <br>
                <table id="bio" class="display" width="100%" cellspacing="0">
        			<thead>
        				<tr>
                			<th>CORRECTIVE/PREVENTIVE ACTION</th>
            			</tr>
            			<tr>
                			<th>Number</th>
                			<th>Action</th>
                			<th>By Whom</th>
                			<th>Timeline/Completion Date</th>
            			</tr>
            		</thead>
            		<tr>
            				<td>
                    				{!! Form::text('number', $value = null, ['class' => 'form-control']) !!}
            				</td>
            				<td>
                    				{!! Form::text('action', $value = null, ['class' => 'form-control']) !!}
            				</td>
            				<td>
                    				{!! Form::text('whom', $value = null, ['class' => 'form-control']) !!}
            				</td>
                			<td>
                    				{!! Form::text('timeline', $value = null, ['class' => 'form-control']) !!}
            				</td>
            		</tr>
            		<tr>
            				<td>
                    				{!! Form::text('number', $value = null, ['class' => 'form-control']) !!}
            				</td>
            				<td>
                    				{!! Form::text('action', $value = null, ['class' => 'form-control']) !!}
            				</td>
            				<td>
                    				{!! Form::text('whom', $value = null, ['class' => 'form-control']) !!}
            				</td>
                			<td>
                    				{!! Form::text('timeline', $value = null, ['class' => 'form-control']) !!}
            				</td>
            		</tr>
            		<tr>
            				<td colspan="2">
            						{!! Form::label('report', 'Report/Investigated By:', ['class' => 'control-label']) !!}
            						<br>
            						{!! Form::textarea('whom', $value = null, ['class' => 'form-control', 'rows'=> 3 ,'placeholder' => 'Click here to enter text']) !!}
            				</td>
                    				
            				<td colspan="2">
            						{!! Form::label('review', 'Reviewed By:', ['class' => 'control-label']) !!}
            						<br>
            						{!! Form::textarea('whom', $value = null, ['class' => 'form-control', 'rows'=> 3 ,'placeholder' => 'Click here to enter text']) !!}
            				</td>
            		</tr>

            </div>
        </div>
    </fieldset>









    </div>
    </div>
    </body>
    </html>
