<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Clearence</title>
</head>
 
<body>

<div class="container">

<h2>Swinburne Bio Safety Committee</h2>
<h3>Application for biosafety clearence for use of Exempt dealing</h3>

@section('content')
 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
 
    
    <div class="row">
        <table id="example" class="display" width="100%" cellspacing="0">
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

        <legend>4. Exemption Category</legend>

        <div class="row">

        <table id="bio" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 50px;">4</th>
                <th>Exemption Category</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="checkbox" value="2"></td>
                <td><p>2)  A dealing with a genetically modified Caenorhabditis elegans, unless:<br>
(a) an advantage is conferred on the animal by the genetic modification; or<br>
(b) as a result of the genetic modification, the animal is capable of secreting or producing an infectious agent.</p></td>
            </tr>    

            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td><p>3)   A dealing with an animal into which genetically modified somatic cells have been introduced, if:<br>
(a) the somatic cells are not capable of giving rise to infectious agents as a result of the genetic modification; and<br>
(b) the animal is not infected with a virus that is capable of recombining with the genetically modified nucleic acid in the somatic cells.</p></td>
            </tr>  

            <tr>
                <td> <input type="checkbox" value="4"></td>
                <td><p>3A) A dealing with an animal whose somatic cells have been genetically modified in vivo by a   replication defective viral vector, if:<br>
(a) the in vivo modification occurred as part of a previous dealing; and<br>
        (b) the replication defective viral vector is no longer in the animal; and<br>
        (c) no germ line cells have been genetically modified; and<br>
        (d) the somatic cells cannot give rise to infectious agents as a result of the genetic      modification; and<br>
        (e) the animal is not infected with a virus that can recombine with the genetically              modified nucleic acid in the somatic cells of the animal.</p></td>
            </tr>  


            <tr>
                <td> <input type="checkbox" value="5"></td>
                <td><p>(1) Subject to subitem (2), a dealing involving a host/vector system mentioned in Part 2 of  this Schedule and producing no more than 25 litres of GMO culture in each vessel containing the resultant culture.<br>
    (2) The donor nucleic acid:<br>
            (a) must meet either of the following requirements:<br>
                (i) it must not be derived from organisms implicated in, or with a history of                   causing, disease in otherwise healthy:<br>
                    (A) human beings; or<br>
                    (B) animals; or<br>
                    (C) plants; or<br>
                    (D) fungi;<br>
(ii) it must be characterised and the information derived from its  characterisation show that it is unlikely to increase the capacity of the host or vector to cause harm;<br>
             (b) must not code for a toxin with an LD50 of less than 100 g/kg; and<br>
             (c) must not code for a toxin with an LD50 of 100 g/kg or more, if  the intention is to            express the toxin at high levels; and<br>
             (d) must not be uncharacterised nucleic acid from a toxin-producing organism; and<br>
             (e) must not include a viral sequence, unless the donor nucleic acid:<br>
                (i) is missing at least 1 gene essential for viral multiplication that:<br>
(A) is not available in the cell into which the nucleic acid is introduced; and<br>(B) will not become available during the dealing; and<br>
            (ii) cannot restore replication competence to the vector.</p></td>

            </tr>

            <tr>
                <td> <input type="checkbox" value="6"></td>
                <td><p>5) A dealing involving shot gun cloning, or the preparation of a cDNA library, in a host/vector system mentioned in item 1 of Part 2 of this Schedule, if the donor nucleic acid is not derived from either: <br>
(a) a pathogen; or<br>
(b) a toxin producing organism.</p></td>
            </tr>  

        </tbody>
        </table>
        </div>

        </fieldset>

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

        <fieldset>
        <legend>6. What are the possible hazard(s) or risk(s) involved?</legend>
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
        <legend>7. Provide a list of the SOPs and Risk Assessments to be used.</legend>
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
            <legend>8. Facilities to be used</legend>

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
            <legend>9. Biosafety Officer(s)/ Lab Manager notification</legend>
            
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


        </div>
        </div>
</body>
 
</html>