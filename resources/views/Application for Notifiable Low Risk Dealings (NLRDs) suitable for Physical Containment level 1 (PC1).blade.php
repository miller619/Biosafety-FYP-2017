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

    
 
        <legend>Legend</legend>
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
<hr>
      <fieldset>

        <!-- 1.Title of project-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Project_Title', '1.Title of project')!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('Project_Title', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                        </div>
                        </div>
                    </div>
    </fieldset>
     <fieldset>
        <legend>2. Chief Investigator/Project Supervisor </legend>
        <p>(Must be a Swinburne staff member)</p>

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
                    {!! Form::label('address', 'Current qualifications (please include all): ', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('address', $value = null, ['class' => 'form-control']) !!}
                    </div>
                    <br>
                    <div class="col-xs-8">
                    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('phone', $value = null, ['class' => 'form-control']) !!}
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
                    <div class="col-xs-8">
                    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!} <br>
                    {!! Form::text('phone', $value = null, ['class' => 'form-control']) !!}
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

        <legend>4. Exemption Category</legend>

        <div class="row col-xs-12">

        <table id="bio" class="table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 50px;">4</th>
                <th>Exemption Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="checkbox" value="2"></td>
                <td><p>a) A dealing involving a genetically modified laboratory guinea pig, a genetically modified laboratory mouse, a genetically modified laboratory rabbit or a genetically modified laboratory rat, unless:<br><br>
  <p class="col-xs-12">(i) an advantage is conferred on the animal by the genetic modification; or<br>
   (ii) the animal is capable of secreting or producing an infectious agent as a result of the genetic modification;</p>
            </tr>    

            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>(c) A dealing involving a replication defective vector derived from Human adenovirus or Adeno associated virus in a host mentioned in item 4 of Part 2 of Schedule 2, if the donor nucleic acid:<br><br>
                <p class="col-xs-12">
  (i) cannot restore replication competence to the vector; and<br>
  (ii)  does not:<br>
  (A) confer an oncogenic modification in humans; or<br>
  (B) encode a protein with immunomodulatory activity in humans.</p>
            </tr>  

          

        </tbody>
        </table>
        </div>

        </fieldset><hr>
         <fieldset>
        <legend>5. Project Summary</legend>
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
        <hr>
        <fieldset>
        <legend>6. Table of GMOs </legend>
        <div class="row">
            <div class="col-xs-12">
              <div class="table-responsive" align="center">          
          <table class="table-bordered">
            <thead>
              <tr>
                <th>Scientific name of unmodified organism</th>
                <th>Vectors and method of transfer</th>
                <th>Gene Identity and Species of Origin</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!} </td>
                <td>{!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!} </td>
                <td>{!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!} </td>
              </tr>
            </tbody>
          </table>
        </div>
                        
            </div>
        </div>
        </fieldset>
        <hr>
         <fieldset>
        <legend>7. Modified trait(s) and gene(s) responsible </legend>
        <div class="row">
            <div class="col-xs-12">
              <div class="table-responsive" align="center">          
          <table class="table-bordered">
            <thead>
              <tr>
                <th>Class of modified trait</th>
                <th>Details</th>
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
                        
            </div>
        </div>
        </fieldset>
        <hr>
        <fieldset>
        <legend>8. What are the possible hazard(s) or risk(s) to the staff performing the proposed genetic modification(s)?</legend>
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
        <hr>
        <fieldset>
        <legend>9. What are the possible hazard(s) or risk(s) from an unintentional release of the GMO(s) into the environment?</legend>
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
        <hr>
        <fieldset>
        <legend>10. What are the steps you will take in the event of an unintentional release of the GMO(s)?</legend>
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
        <hr>
        <fieldset>
        <legend>11. Do you propose to transport the GMO(s) outside a certified facility?</legend>
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
        <hr>
        <fieldset>
        <legend>12. How will the GMO(s) be disposed of?</legend>
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
        <hr>
        <fieldset>
        <legend>13. Provide a list of the SOPs and Risk Assessments for the protocols to be used.</legend>
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
        <hr>
        <fieldset>
            <legend>14. Facilities to be used</legend>

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
        <hr>
        <fieldset>
            <legend>15. Biosafety Officer(s)/ Lab Manager notification</legend>
            
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