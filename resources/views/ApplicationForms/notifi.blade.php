<!doctype html>
<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Laravel</title>
</head>
 
<body>
<div class="container">
 @section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}


    
    <fieldset>

    
 
        <legend align="center" >SSBC_002 Notification of LMO and Biohazardous Material</legend>

        <h5>Important Note:</h5>
    <p>This form is to be completed when new LMOs or biohazardous materials has been acquired.</p>
        <div class="table-responsive" align="center">          
          <table class="table-bordered">
            <thead>
              <tr>
                <th>DATE RECEIVED</th>
                <th>SBC REFERENCE NUMBER</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!} </td>
                <td>{!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!} </td>
              </tr>
            </tbody>
          </table>
        </div>
       
   
    </fieldset>
    <fieldset>
      <legend>
        SECTION 1 - Personal Details
      </legend>

      <div class="row">
            <div class="col-xs-12">
            
                <div class="form-group">
                    <div class="col-xs-6">
                    {!! Form::label('ic_passport', '1.01   Name (as per I.C. / Passport):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('ic_passport', $value = null, ['class' => 'form-control']) !!}
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
                    {!! Form::label('project_Title', '1.06 Project Title and Ref. No (if FYP/research):', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('project_Title', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-12">
                    {!! Form::label('Storage_Location', '1.07 Storage Location:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('Storage_Location', $value = null, ['class' => 'form-control' ]) !!}
                    </div><br>
                    <div class="col-xs-12">
                    {!! Form::label('name_keeper', '1.08   Name of the Keeper:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('name_keeper', $value = null, ['class' => 'form-control' ]) !!}
                    </div>
                </div>
           
            </div>
        </div>
    </fieldset>
    <hr>
    <fieldset>
      <legend>
        SECTION 2 – Details of the Biohazardous Materials
      </legend>
      <div class="col-xs-12">
      <div class="col-xs-6">
      <h4>A. List of Living Modified Organism (LMO) 
      </h4>
      </div>
       <div class="col-xs-3">
                    <p>Not Applicable</p>
                    </div>
      <div class="col-xs-3">
      {!!Form::checkbox('A_list_LMO', 'value');!!}
      </div>

      <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Risk Level</th>
                            <th>Quantity</th>
                            <th>Volume (g or mL)</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                           
                        </tbody>
                      </table>
        </div>
      <br><br><br>

      <div class="col-xs-12">
      <div class="col-xs-6">
      <h4>B. List of Biohazardous Material 
      </h4>
      </div>
       <div class="col-xs-3">
                    <p>Not Applicable</p>
                    </div>
      <div class="col-xs-3">
      {!!Form::checkbox('A_list_LMO', 'value');!!}
      </div>

      <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Risk Level</th>
                            <th>Quantity</th>
                            <th>Volume (g or mL)</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                          <tr>
                            <td>{!!Form::text('name')!!}</td>
                            <td>                            
                            {!! Form::text('Risk Level')!!}
                            </td>
                            <td>                    
                            {!! Form::number('Quantity', 'Your Address')!!} 
                            </td>
                            <td>
                            {!! Form::number('Vol')!!}
                            </td>
                          </tr>
                           
                        </tbody>
                      </table>
        </div>

    </fieldset>
    <hr>
    <fieldset>
    <legend>SECTION 3 - Declaration</legend>

      <p>
      <ul>
        <li>
          I, hereby declare that the information I have provided in this form for Notification of LMO and Biohazardous Material is true and correct.
        </li>  
        <li>
        Swinburne University of Technology Sarawak Campus collects, uses and destroys personal data in accordance with our Privacy Collection Notice a <a href="http://www.swinburne.edu.my/privacy/ ">http://www.swinburne.edu.my/privacy/ </a> and Employee's Privacy Collection Notice atBlackboard>My.Swinburne>Student & Corporate Services> Human Resources>Employee's Privacy Collection Notice.
        </li>
      </ul>
      </p>

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
  <hr>
    <fieldset>
    <legend>SECTION 4 – Signature</legend>

      <p>
      Verified by (Unit Convenor / Project Investigator): 
      </p>

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
  <hr>
    <fieldset>
    <legend>SECTION 5 – For Office Use Only</legend>
      <div class="row">
              <div class="col-xs-12">
              
                  <div class="form-group">
                      <div class="col-xs-6">
                        <div class="col-xs-3">
                         {!! Form::radio('A', 'Approved') !!} <p>Approved by:</p>
                         </div>
                         <div class="col-xs-3"> 
                          {!! Form::radio('A', 'Declided') !!}<p>Declined by</p>
                          </div>
                      </div>
                      <div class="col-xs-6">
                      {!! Form::label('Reviewed_by', 'Reviewed by:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('Reviewed_by', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                      <div class="col-xs-6">
                      {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                      <div class="col-xs-6">
                      {!! Form::label('signature', 'Signature:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('signature', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                      <div class="col-xs-6">
                      {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('date', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                       <div class="col-xs-6">
                      {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('date', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                       <div class="col-xs-6">
                      {!! Form::label('remark', 'Remaeks:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('remark', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                      <div class="col-xs-6">
                      {!! Form::label('remark', 'Remaeks:', ['class' => 'control-label']) !!} <br>
                      {!! Form::textarea('remark', $value = null, ['class' => 'form-control', 'rows' => 2]) !!}
                      </div>
                  </div>
              </div>
          </div>

  </fieldset>
    </div>
 
    {!! Form::close()  !!}
 
</div>
</div>
</body>
 
</html>