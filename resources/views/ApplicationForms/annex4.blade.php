<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>ANNEX4<</title>
</head>
 
<body>

<div class="container">
	<h3>IBC/OD/10/ANNEX4</h3>
	<h2>INSTITUTIONAL BIOSAFETY COMMITTEE OCCUPATIONAL DISEASE / EXPOSURE INVESTIGATION FORM</h2>
	

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}

    <div class="row">
        <div class="col-xs-12">
        	<div class="form-group">
                    <div class="col-xs-3">
                    {!! Form::label('ref', 'Reference No.:', ['class' => 'control-label']) !!} 
                    
                    </div>
                    <div class="col-xs-3">
                    
                    {!! Form::text('ref', $value = null, ['class' => 'form-control']) !!}
                    </div>
            </div>
        </div>
    </div>

<fieldset>
    	<legend>1. INFORMATION OF PERSONNEL INVOLVED IN OCCUPATIONAL DISEASE</legend>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('name', 'Name:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    
                </div>
            </div>
    	</div>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('nric', 'NRIC:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('nric', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('contact', 'Contact no:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('contact', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('age', 'Age:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('age', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('office', 'Office:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('office', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('race', 'Race:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('race', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('ext', 'Ext:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('ext', $value = null, ['class' => 'form-control']) !!}
                    </div>

                </div>
            </div>
    	</div>


    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                <h4>Employment Details</h4>
                    <div class="col-xs-12">
                    {!! Form::label('job', 'Job Title :', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('job', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-12">
                    {!! Form::label('faculty', 'Faculty/Department:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('faculty', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-12">
                    {!! Form::label('status', 'Employment Status:', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="Yes" id="checkboxgroup">Permanent
                    	<input type="checkbox" value="Yes" id="checkboxgroup">Contract
                    </div>
                     <div class="col-xs-12">
                     	<div class="col-xs-3">
                    	{!! Form::label('duration', 'Duration of Current Job:', ['class' => 'control-label']) !!}
                    	
                    	</div>
                    	<div class="col-xs-3">
                    		{!! Form::text('duration', $value = null, ['class' => 'form-control', 'placeholder' => 'months/years']) !!} 
                    </div>
                    </div>
                </div>
            </div>
    	</div>

    </fieldset>

    <fieldset>
    	<legend>2.	DESCRIPTION OF OCCUPATIONAL DISEASE / EXPOSURE TO LMO/rDNA MATERIALS</legend>

    	<div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <div class="col-xs-12">
                    {!! Form::label('location', 'Location in the department of occupational exposure to LMO/rDNA materials occurred:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('location', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-6">
                    {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-xs-6">
                    {!! Form::label('time', 'Time:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('time', $value = null, ['class' => 'form-control', 'placeholder' => 'am/pm']) !!}
                    </div>

                    <div class="col-xs-12">
                    <br>
                    	<p>Diagnosis/Provisional Diagnosis:</p>
                    		{!! Form::label('treatment', 'Particulars of Treatment:', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="nil" id="checkboxgroup">Nil
                    	<input type="checkbox" value="out" id="checkboxgroup">Outpatient Treatment<br>
                    	<input type="checkbox" value="aid" id="checkboxgroup">First Aid
                    	<input type="checkbox" value="admission" id="checkboxgroup">Admission to Hospital
                    </div>
                    <div class="col-xs-12">
                    <br>
                    	
                    		{!! Form::label('medical', 'Medical Certificate given:', ['class' => 'control-label']) !!} <br>
                    	<input type="checkbox" value="yes" id="checkboxgroup">Yes
                    	<input type="checkbox" value="no" id="checkboxgroup">No<br>
                    	
                    </div>
                    <br>
                    <div class="col-xs-12">
                    	<div class="col-xs-4">
                    	{!! Form::label('duration', 'Duration of MC:', ['class' => 'control-label']) !!} <br>
                    	{!! Form::text('duration', $value = null, ['class' => 'form-control', 'placeholder' => 'days']) !!}
                    	</div>
                    </div>
                    
                    <br>
                    
                    <div class="col-xs-12">
                    <p><b>Description of events (Describe tasks being performed and sequence of events. Use Appendix if necessary)</b></p>
                    	{!! Form::label('kind', 'a)	 What kind of work did the personnel do which may be associated with the disease? (Describe work activities)', ['class' => 'control-label']) !!} <br>
                    	{!! Form::textarea('kind', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}

					</div>

					<div class="col-xs-12">
                    	
                    	{!! Form::label('hazard', 'b) What was the hazard or agent being exposed to the personnel?', ['class' => 'control-label']) !!} <br>
                    	{!! Form::textarea('hazard', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                    	
                    </div>

                    <div class="col-xs-12">
                    	
                    	{!! Form::label('long', 'c) How long had the personnel been exposed to the hazard or agent?', ['class' => 'control-label']) !!} <br>
                    	{!! Form::textarea('long', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                    	
                    </div>
                    <div class="col-xs-12">
                    	
                    	{!! Form::label('symptoms', 'd) What are the symptoms and how long had the personnel been experiencing the symptoms?', ['class' => 'control-label']) !!} <br>
                    	{!! Form::textarea('symptoms', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                    	
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


            </div>
    	</div>


    </fieldset>


    {!! Form::close()  !!}

</div>
</div>
</body>
</html>