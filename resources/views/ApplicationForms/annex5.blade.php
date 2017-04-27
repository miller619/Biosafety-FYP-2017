<!doctype html>
<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>Laravel</title>
</head>
 
<body>
<div class="container">
<h2>Project Extension & Notice of Termination</h2>
<h3>IBC/PE-NT/10/ANNEX5</h3>

 @section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
    
   <fieldset>

   <legend>1. Identification</legend>

        <!-- a)  Name of Principal Investigator:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('name_Investigator', 'a)   Name of Principal Investigator:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Project_Title', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>

        <!-- b) Email-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('name_Investigator', 'b)   Email:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                        </div>
                        </div>
                    </div>

        <!-- c)  Faculty/Department:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Department', 'c)  Faculty/Department:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Department', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>

        <!-- d)  Tel:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Tele', 'd)   Tel:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Tele', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>

        <!--e)   IBC Reference No.:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Tele', 'e)   IBC Reference No.:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Tele', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>

        <!-- f)   NBB Reference No. (if applicable):-->
                  
                      <div class="form-group">
                          <div class="col-xs-12">
                          <div class="col-xs-12">
                               {!! Form::label('NBB_ref_NO', 'f)    NBB Reference No. (if applicable):')!!}
                          </div>
                          <div class="col-xs-12">
                          {!! Form::text('NBB_ref_NO', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                          </div>
                          </div>
                      </div>

        <!--g)   Project Title:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Project_title', 'g)   Project Title:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Project_title', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>

        <!--h)   Identify LMO/rDNA materials:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Identify_lmordna', 'h)    Identify LMO/rDNA materials:')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Identify_lmordna', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>
    </fieldset>
      <hr>
      <fieldset>
        <legend>2. Request for Project Extension/Notice of Termination</legend>

        <div class="col-xs-12">
          <div class="col-xs-3">
            {!!Form::checkbox('name', 'value')!!}
          </div>
          <div class="col-xs-9">
            <p>I request extend IBC approval of my use/possession of the LMO/
            rDNA materials described above. (Complete Sections C, and D
            below)</p>
          </div>

        </div>
        <p align="center">OR</p>
        <div class="col-xs-12">
          <div class="col-xs-3">
            {!!Form::checkbox('name', 'value')!!}
          </div>
          <div class="col-xs-9">
            <p>I request termination of IBC approval. Describe when and how the
            LMO/rDNA materials identified above will be disposed of:</p>
          </div>

        </div>
 
   
    </fieldset>
    <hr>
    <fieldset>
      <legend>
        3.General Information
      </legend>
      <!--a)Will the Principal Investigator change?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>a) Will the Principal Investigator change?</p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('A', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('A', 'NO') !!}
        </div>
      </div>

      <!--b) Will the Risk Group (RG) change?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>b) Will the Risk Group (RG) change?</p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>

      <!--c) Will the Biosafety Level (BSL) change?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>c) Will the Biosafety Level (BSL) change? </p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>

      <!--d) Will the type or amount of LMO/rDNA materials change?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>d) Will the type or amount of LMO/rDNA materials change? </p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>

      <!--e) Will the LMO/rDNA materials be moved to another laboratory?-->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>e) Will the LMO/rDNA materials be moved to another laboratory?</p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>

      <!--f) Will the use of the LMO/rDNA materials change?-->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>f) Will the use of the LMO/rDNA materials change?</p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>
        <p>If the answer to any of the above questions (1–6) is Yes, you must submit an
        application form NBB/N/CU/10/ANNEX 5 (Notification for contained use and
        import for contained use activities for classes 1, 2, 3 and 4) to the NBB through
        IBC for approval before making any of these changes.</p>
    </fieldset>
    <hr>
    <fieldset>
      <legend>
       4. Adverse Events
      </legend>
      <!--a)Have any adverse events occurred since the project approval or last
request for project extension approval?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>a) Have any adverse events occurred since the project approval or last
request for project extension approval?</p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('A', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('A', 'NO') !!}
        </div>
      </div>

      <!--b)If so, was an Incident Reporting Form submitted to the IBC as required by
the IBC regulation?  -->
      <div class="col-xs-12">
        <div class="col-xs-8">
          <p>b) If so, was an Incident Reporting Form submitted to the IBC as required by
the IBC regulation? </p>
        </div>
        <div class="col-xs-2">
          <p>Yes</p>
          {!! Form::radio('B', 'YES') !!}
          &ensp;&ensp;
          </div>
          <div class="col-xs-2">
          <p>No</p>
          {!! Form::radio('B', 'NO') !!}
        </div>
      </div>
      </fieldset>
      <hr>
      <fieldset>
        <legend>
          5. Certification
        </legend>
        <p>I certify that the above information         accurately describes the current status of
          the modern biotechnology activities that was previously approved by the IBC. I
          understand that I must resubmit a new <strong>NBB/N/CU/10/ANNEX 5</strong> (Notification for
          contained use and import for contained use activities for classes 1, 2, 3 and 4)
          form in the event my use of, or amount of LMO/rDNA materials changes, or if I
          have terminated my use /possession of LMO/rDNA and wish to begin modern
          biotechnology activity again.</p>
      </fieldset>
      <p>Incomplete</p>
    </div>
    </div>

    {!! Form::close()  !!}
 
</div>
</body>
 
</html>