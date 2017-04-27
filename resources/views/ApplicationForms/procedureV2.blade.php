<html>
 
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Safe Work Procedure</title>
</head>
 
<body>

<div class="container">

<h2>SSBS_001 Safe Work Procedure (SWP)</h2>
<h3>Application for biosafety clearence for use of Exempt dealing</h3>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

    <fieldset>
    <legend>PLEASE FILL IN ALL INFORMATION REQUESTED</legend>
    <div class="row">
        <table id="bio" class="table table-bordered" width="100%" cellspacing="0">
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
    </fieldset>
<br>
    <fieldset>
    	<legend>SECTION 1 - General Details</legend>

    	<div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('swp', '1.01 SWP Prepared by:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('swp', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('staff', '1.02 Staff/Student No:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('staff', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('desig', '1.03 Designation:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('designation', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('faculty', '1.04 Faculty/Unit:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('faculty', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('unit', '1.05 Unit Code/Unit Title (if teaching):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('unit', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('project', '1.06 Project Title (if research):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('project', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('Location', '1.07 Location:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('location', $value = null, ['class' => 'form-control' ]) !!}
                    </div>
                </div>
           
            </div>
        </div>
    </fieldset>
<br>

	<fieldset>
		<legend>SECTION 2 - Experiment General Details</legend>
		<div class="row">
            <div class="col-xs-12">
            	<div class="form-group">
            		<div class="col-xs-12">
                    {!! Form::label('brief', 'Brief Description of the Activity:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('brief', 'A. Pre-operational:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','rows' => 2, 'placeholder' => 'E.g. Proper lab attire; proper personal protective equipment; hand hygiene; understand the equipment SOPs etc.']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('brief', 'B. Operational:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','placeholder' => 'E.g. Proper handling of the specimens/samples; samples processing in BSC; imaging of the specimens using microscopes; analysis samples using plate reader; emergency response to biological spills or accident etc.' ,'rows' => 2]) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('brief', 'C. Post-operational:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','placeholder' => 'E.g. Proper labelling, storage and transportation of the specimens/samples; decontamination and disposal of the specimens/samples (solid/liquid waste); cleaning of the workspaces and equipment etc.','rows' => 2]) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('brief', 'D. Potential Hazard Identification and risk of exposure to hazards:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','rows' => 2]) !!}
                    </div>
                    <div class="col-xs-12">
                    {!! Form::label('brief', 'E. Exposure Control Specific to the above mentioned Hazards:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('brief', $value = null, ['class' => 'form-control','rows' => 2]) !!}
                    </div>
            	</div>
            </div>
        </div>

	</fieldset>

	<fieldset>
		<legend>SECTION 3 - Declaration</legend>

		<p>I have checked and I hereby confirm that the above information is correct. I will obey and follow all the Standard Operating Procedures (SOP) and Safe Working Procedures (SWP) as stated in the laboratory rules & regulations.</p>

		<div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('signature', 'Name & Signature:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('date', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                    </div>
                </div>
            </div>
        </div>

	</fieldset>
	<fieldset>
		<legend>SECTION 4 - Signature</legend>
		<div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('prepared', 'Prepared by:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('prepared', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('verified by', 'Verified by(Project Investigator):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                </div>
            </div>
        </div>

	</fieldset>
	<fieldset>
		<legend>SECTION 5 - For Office Use Only</legend>
		<p>Have the lab personnel gome through the training(s)?</p>
            <p id="checkboxgroup">
		<input type="checkbox" value="Yes">Yes
		<input type="checkbox" value="Yes">No
            </p>
		<p>If yes, by who and when?</p>
				<div class="col-xs-12">
                    {!! Form::label('when', 'Who and when:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('when', $value = null, ['class' => 'form-control']) !!}
                </div>
                <hr>
	 <br>
	<div class="col-xs-6">
				<input type="checkbox" value="Yes">Approved by:
                
                {!! Form::text('approved', $value = null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6">
                {!! Form::label('reviewed', 'Reviewed by:', ['class' => 'control-label']) !!} <br>
                {!! Form::text('reviewed', $value = null, ['class' => 'form-control']) !!}
    </div>
    <br>
    <div class="col-xs-6">
				<input type="checkbox" value="Yes">Declined by:
                
                {!! Form::text('declined', $value = null, ['class' => 'form-control']) !!}
    </div>
    <div class="col-xs-6">
    	 {!! Form::label('reviewed', 'Reviewed by:', ['class' => 'control-label']) !!} <br>
                {!! Form::text('reviewed', $value = null, ['class' => 'form-control']) !!}
    </div>
    <br>
				<div class="col-xs-6">
                    {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                </div>
                <div class="col-xs-6">
                    {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                    {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                </div>
                    <br>
                <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                </div>		
                 <div class="col-xs-6">
                    {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('remarks', $value = null, ['class' => 'form-control']) !!}
                </div>
                <div class="col-xs-6">
                    {!! Form::label('remarks', 'Remarks:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('remarks', $value = null, ['class' => 'form-control']) !!}
                </div>			  
	</fieldset>

	


</div>
</div>
</body>
</html>