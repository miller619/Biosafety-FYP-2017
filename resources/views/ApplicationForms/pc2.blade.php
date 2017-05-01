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

<h2>Application for Notifiable Low Risk Dealings (NLRDs) suitable for Physical Containment level 2 (PC2)</h2>
 @section('content')

 
<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
  
    <fieldset>

    
 
        
        <div class="table-responsive" align="center">          
          <table id="bio" class="table table-bordered" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>DATE RECEIVED</th>
                <th>SBC REFERENCE NUMBER</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>{!! Form::text('premises3.12', $value = null, ['class' => 'form-control'])!!} </td>
                <td>{!! Form::text('premises3.12', $value = null, ['class' => 'form-control'])!!} </td>
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
                             {!! Form::label('Project_Title', '1.Title of project')!!}
                        </div>
                        <div class="col-xs-12">
                            {!! Form::text('Project_Title', $value = null, ['class' => 'form-control'])!!}
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

        <legend>Type of NLRD Dealing (check the box that applies)  – Schedule 3, Part 2, 2.1</legend>

        <div class="row col-xs-12">

        <table id="bio1" class="table-bordered" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 50px;">4</th>
                <th>Type of NLRD Dealing</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <input type="checkbox" value="2"></td>
                <td>
                <p class="col-xs-12" id ="listitm" >
                (a)  A dealing involving whole animals (including non-vertebrates) that:<br>
                (i) involves genetic modification of the genome of the oocyte or zygote or early embryo by any means to produce a novel whole organism; and<br><br>
                 does not involve any of the following:<br>
                &ensp;&ensp;(A) a genetically modified laboratory guinea pig;<br>
                &ensp;&ensp;(B) a genetically modified laboratory mouse;<br>
                &ensp;&ensp;(C) a genetically modified laboratory rabbit;<br>
                &ensp;&ensp;(D) a genetically modified laboratory rat;<br>
                &ensp;&ensp;(E) a genetically modified Caenorhabditis elegans;
                </p>
                </td>
            </tr>    

            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm" >
                (a) A dealing involving a genetically modified laboratory guinea pig, a genetically modified mouse, a genetically modified laboratory rabbit, a genetically modified laboratory rat, or a genetically modified Caenorhabditis elegans if:<br><br>
                
                &ensp;&ensp;(i)  the genetic modification confers an advantage on the animal; and <br>
                &ensp;&ensp;(ii) the animal is not capable of secreting or producing an infectious agent as a result of the genetic modification;<br>
                </p>
                </td>
            </tr>  

             <tr>
                <td> <input type="checkbox" value="3"></td>
                <td> 
                <p class="col-xs-12" id ="listitm" >
                (b)  A dealing involving a genetically modified plant;</td>
                </p>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm" >
                (c)  A dealing involving a host/vector system not mentioned in paragraph 1.1 (c) or Part 2 of Schedule 2, if neither host nor vector has been implicated in, or has a history of causing,  disease in otherwise healthy:<br><br>
           
                &ensp;&ensp;(i) human beings; or <br>
                &ensp;&ensp;(ii) animals; or<br>
                &ensp;&ensp;(iii) plants; or<br>
                &ensp;&ensp;(iv) fungi;<br>
                </p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (d)  A dealing involving a host and vector not mentioned as a host/vector system in Part 2 of Schedule 2, if:<br><br>
                
                (i) the host or vector has been implicated in, or has a history of causing, disease in otherwise healthy:<br>
                &ensp;&ensp;(A) human beings; or<br>
                &ensp;&ensp;(B) animals; or<br>
                &ensp;&ensp;(C) plants; or<br>
                &ensp;&ensp;(D) fungi; and <br>
                (ii) the donor nucleic acid is characterised; and<br>
                (iii) the characterisation of the donor nucleic acid shows that it is unlikely to increase  the capacity of the host or vector to cause harm;<br>
                </p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (e)  A dealing involving a host/vector system mentioned in Part 2 of Schedule 2, if the donor nucleic acid:<br><br>
                
                (i) encodes a pathogenic determinant; or<br>
                
                (ii)  is uncharacterised nucleic acid from an organism that has been implicated in, or has a history of causing, disease in otherwise healthy:<br>
                &ensp;&ensp;(A) human beings; or<br>
                &ensp;&ensp;(B) animals; or<br>
                &ensp;&ensp;(C) plants; or<br>
                &ensp;&ensp;(D) fungi; and <br>
               
                </p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                f)   a dealing involving a host/vector system mentioned in Part 2 of Schedule 2 and producing more than 25 litres of GMO culture in each vessel containing the resultant culture, if:<br><br>
                
                &ensp;&ensp;(i) the dealing is undertaken in a facility that is certified by the Regulator as a large scale facility; and<br>
                
                &ensp;&ensp;(ii)  the donor nucleic acid satisfies the conditions set out in subitem 4 (2) of Part 1 of Schedule 2; <br>
               
                </p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (g)  A dealing involving complementation of knocked-out genes, if the complementation is unlikely  to increase the capacity of the GMO to cause harm compared to the capacity of the parent organism before the genes were knocked out;</p>
                </td>    
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (h)  A dealing involving shot-gun cloning, or the preparation of a cDNA library, in a host/vector system mentioned in item 1 of Part 2 of Schedule 2, if the donor nucleic acid is derived from either:<br><br>
               
                &ensp;&ensp;(i) a pathogen; or<br>
                
                &ensp;&ensp;(ii)a toxin-producing organism; <br>
               
                </p></td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (i)   A dealing involving the introduction of a replication defective viral vector unable to transduce human cells into a host not mentioned in Part 2 of Schedule 2, if the donor nucleic acid cannot restore replication competence to the vector;</p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (j)  A dealing involving the introduction of a replication defective non-retroviral vector able to transduce human cells, other than a dealing mentioned in paragraph 1.1 (c), into a host  mentioned in Part 2 of Schedule 2, if the donor nucleic acid cannot restore replication  competence to the vector;</p>
                </td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                k)  A dealing involving the introduction of a replication defective non-retroviral vector able to  transduce human cells into a host not mentioned in Part 2 of Schedule 2, if:<br><br>
               
                (i) the donor nucleic acid cannot restore replication competence to the vector; and<br>
                
                (ii) the donor nucleic acid does not:<br>
                &ensp;&ensp;(A) confer an oncogenic modification in humans; or<br>
                &ensp;&ensp;(B)  encode a protein with immunomodulatory activity in humans;<br>
                </p></td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (l)  A dealing involving the introduction of a replication defective retroviral vector able to transduce human cells into a host mentioned in Part 2 of Schedule 2, if:<br><br>
                
                (i) all viral genes have been removed from the retroviral vector so that it cannot replicate or assemble into a virion without these functions being supplied in trans; and<br>
                
                (ii) viral genes needed for virion production in the packaging cell line are expressed from independent, unlinked loci with minimal sequence overlap with the vector to limit or prevent recombination; and<br>
                (iii) either:<br>
                &ensp;&ensp;(A) the retroviral vector includes a deletion in the Long Terminal Repeat  sequence of DNA that prevents transcription of genomic RNA following integration into the  host cell DNA; or<br>
                &ensp;&ensp;(B)the packaging cell line and packaging plasmids express only viral genes  gagpol, rev and an envelope protein gene, or a subset of these;<br>
                </p></td>
            </tr>
            <tr>
                <td> <input type="checkbox" value="3"></td>
                <td>
                <p class="col-xs-12" id ="listitm">
                (m) A dealing involving the introduction of a replication defective retroviral vector able to transduce human cells into a host not mentioned in Part 2 of Schedule 2, if:<br><br>
                
                (i) the donor nucleic acid does not:<br>
                &ensp;&ensp;(A)confer an oncogenic modification in humans; or<br>
                &ensp;&ensp;(B)encode a protein with immunomodulatory activity in humans; and<br>
                
                (ii) all viral genes have been removed from the retroviral vector so that it cannot replicate or assemble into a virion without these functions being supplied in trans; and<br>
                (iii) viral genes needed for virion production in the packaging cell line are expressed from independent, unlinked loci with minimal sequence overlap with the vector to limit or prevent recombination; and<br>
                (iv)either:<br>
                &ensp;&ensp;(A) the retroviral vector includes a deletion in the Long Terminal Repeat  sequence of DNA that prevents transcription of genomic RNA following integration into the  host cell DNA; or<br>
                &ensp;&ensp;(B)the packaging cell line and packaging plasmids express only viral genes  gagpol, rev and an envelope protein gene, or a subset of these;<br>
                </p></td>
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