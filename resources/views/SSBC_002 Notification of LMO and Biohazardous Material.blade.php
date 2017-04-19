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
    <div class="container">
    <fieldset>

    
 
        <legend align="center" >SSBC_002 Notification of LMO and Biohazardous Material</legend>
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
    </fieldset>
    </div>
 
    {!! Form::close()  !!}
 
</div>
</div>
</body>
 
</html>