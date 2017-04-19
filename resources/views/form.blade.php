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

    
 
        <legend>Legend</legend>
        <div class="table-responsive" align="center">          
          <table class=" table-condensed">
            <thead>
              <tr>
                <th>Firstname</th>
                <th>Lastname</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Anna</td>
                <td>Pitt</td>
              </tr>
            </tbody>
          </table>
        </div>
       
   
    </fieldset>

      <fieldset>

    
 
        <legend>Legend</legend>
 
   
    </fieldset>
    </div>
 
    {!! Form::close()  !!}
 
</div>
</div>
</body>
 
</html>