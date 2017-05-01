<!doctype html>
<html>
 
<head>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />
    <title>FormE</title>
</head>
 
<body>
<div class="container">
<h3>Biosafety Act 2007</h3>
<h3>Biosafety Regulations 2010</h3>
<h2>NBB/N/CU/15/FORM E</h2>
 @section('content')
 
<div class="well">

<p>
NOTIFICATION FOR CONTAINED USE AND IMPORT FOR CONTAINED USE ACTIVITIES INVOLVING LIVING MODIFIED ORGANISM (LMO) FOR BIOSAFETY LEVELS 1, 2, 3 AND 4

Please refer to the Explanatory Notes of NBB/N/CU/15/FORM E before filling up this form</p>

 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
 
    <fieldset>
 
    <h2>Notification Check List</h2>
       
       <div class="form-group">
                    <div class="table-responsive">          
                      <table id="bio" class="table table-bordered" width="100%" cellspacing="0">
                        <tbody>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '1. Form NBB/N/CU/15/FORM E is complete with the relevant signatures ') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '2. Cover letter from applicant’s institute provided ') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '3. Notification has been assessed and sent through the IBC(if relevant)') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '4. IBC Assessment Report (hardcopy and softcopy)') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '5. A copy of clearance documents from the relevant Government agencies (if required)') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '6. Any information to be treated as confidential business information has been clearly marked “CBI” in the notification') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '7. One (1) original and six (6) hardcopies of the completed notification are submitted. A soft copy of the submitted notification that does not contain any CBI.') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '8. All supporting documents/attachments required (e.g. SOPs, references)') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                          <tr>
                            <td>
                            {!! Form::label('checkbox', '9. A copy of letter of authorization from R&D collaboration involving more than one premises (if any).') !!}    
                            </td>
                            <td>                            
                             {!! Form::checkbox('checkbox') !!}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      </div>
                      </div>
       
    </fieldset>
    
    <fieldset>
        <legend>Preliminary information</legend>
        <!-- 1.Organization-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('Org', '1.Organization')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('Org')!!}
                        </div>
                        </div>
                    </div>  
                  
        <!-- 2. Name of applicant (Principal Investigator):-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('nmeApplicnt', '2. Name of applicant (Principal Investigator):')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('nmeApplicnt')!!}
                        </div>
                        </div>
                    </div>  
 
         <!-- 3. Name of applicant (Principal Investigator):-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('OrgPosi', '3. Position in Organization:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('OrgPosi')!!}
                        </div>
                            <!-- Position in organization -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('OrgPosi', '3.1 Position in Organization:')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('OrgPosi')!!}
                            </div>
                            </div>
                            <!-- Telephone (office): -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('TeleOff', '3.2.Telephone (office):')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('TeleOff')!!}
                            </div>
                            </div>
                            <!-- Telephone (mobile): -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('TeleMob', '3.3.Telephone (mobile):')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('TeleMob')!!}
                            </div>
                            </div>
                            <!--Fax number: -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('FaxNum', '3.4.Fax number:')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('FaxNum')!!}
                            </div>
                            </div>
                             <!--Email: -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('email', '3.5.Email:') !!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </div>
                            </div>
                            <!--Postal Address -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('FaxNum', '3.6.Fax number:')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('FaxNum')!!}
                            </div>
                            </div>
                        </div>
                    </div>

        <!-- 4.Project Title:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('projTitle', '4.Project Title:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('projTitle')!!}
                        </div>
                        </div>
                    </div>   
        <!-- 5.IBC Project Identification No:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('IBCproIden', '5.IBC Project Identification No:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('IBCproIden')!!}
                        </div>
                        </div>
                    </div>    

        <!-- 6.Is this the first time the activity is being notified?-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('NotificaationTim', '6.Is this the first time the activity is being notified?')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('NotificaationTim')!!}
                        </div>
                        </div>
                    </div>  

        <!-- 6.Is this the first time the activity is being notified?-->
                  <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('NBBrefNo', '7.1.Please provide the NBB reference number of your previous notification.')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::textarea('NBBrefNo')!!}
                        </div>
                        </div>
                    </div> 
                   
                  <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('NotiDiff', '7.2.How is this notification different from the previous notification submitted for this activity?
                            (please provide an attachment if additional space is required)')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::textarea('NotiDiff')!!}
                        </div>
                        </div>
                    </div> 
                  </div>    

        <!-- 8. Organization:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('Organization', '8. Organization:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('Organization')!!}
                        </div>
                        </div>
                    </div>

        <!-- 9. Contact Person:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('CntPer', '9. Contact Person:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('CntPer')!!}
                        </div>
                        </div>
                    </div>

        <!--10.Position in Organization:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('PosOrg', '10.Position in Organization:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('PosOrg')!!}
                        </div>
                        </div>
                    </div>
                    <!-- Telephone (office): -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('TeleOff', '10.2.Telephone (office):')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('TeleOff')!!}
                            </div>
                            </div>
                            <!-- Telephone (mobile): -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('TeleMob', '10.3.Telephone (mobile):')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('TeleMob')!!}
                            </div>
                            </div>
                            <!--Fax number: -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('FaxNum', '10.4.Fax number:')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('FaxNum')!!}
                            </div>
                            </div>
                             <!--Email: -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('email', '10.5.Email:') !!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </div>
                            </div>
                            <!--Postal Address -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('FaxNum', '10.6.Fax number:')!!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::text('FaxNum')!!}
                            </div>
                            </div>
                        
     
    </fieldset>

    <hr>
    <p><strong>Institutional Biosafety Committee (IBC) Assessment for the contained use and import for 
    contained use of LMO</strong></p><br>
    <p>This must be completed by the registered IBC of the Applicant’s organization. 
    This section is not relevant to organizations not involved in modern biotechnology research and development.</p>

    <fieldset>
        <legend>IBC Details</legend>
        <!-- 1.Name of Organization-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('nmeOrg', '1.Name of Organization')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('nmeOrg')!!}
                        </div>
                        </div>
                    </div>  
                  
        <!-- 2. Name of IBC Chairperson::-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('nmeChir', '2.Name of IBC Chairperson:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('nmeChir')!!}
                        </div>
                        </div>
                    </div> 
        <!-- 2.1.Telephone number:-->
                  <div class="col-xs-12">
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('telenum', '2.1.Telephone number:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('telenum')!!}
                        </div>
                        </div>
                    </div> 
        <!-- 2.1.Telephone number:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('telenum', '2.2.Fax:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('Fax')!!}
                        </div>
                        </div>
                    </div> 
        <!-- 2.3.E-mail address:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('email', '2.3.Email:') !!}
                            </div>
                            <div class="col-xs-6">
                             {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </div>
                        </div>
                    </div>

                  </div> 

    </fieldset>
    <fieldset>
        <legend>IBC Assesment</legend>
         <!-- 3.Name of Principal Investigator:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('nmePrinInves', ' 3.Name of Principal Investigator:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('nmePrinInves')!!}
                        </div>
                        </div>
                    </div>      

         <!-- 4.Project Title:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('projTile', ' 4.Project Title:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::text('projTile')!!}
                        </div>
                        </div>
                    </div>  

         <!-- 5.Date of the IBC Assessment:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('DIA', ' 5.Date of the IBC Assessment:')!!}
                        </div>
                        <div class="col-xs-6">
                        {!! Form::date('DIA')!!}
                        </div>
                        </div>
                    </div>  

         <!-- 6.Does the IBC consider that the Principal Investigator and every other person authorized to be involved in the contained use of-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('DIA', '6.Does the IBC consider that the Principal Investigator and every other person authorized to be involved in the contained use of he LMO have adequate training and experience for the task?')!!}
                        </div>
                        <div class="col-xs-6">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>
                        </div>
                        </div>
                    </div> 

        <!-- 7.The following information related to this project has been checked and approved -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('DIA', ' 7.The following information related to this project has been checked and approved ')!!}
                        </div>
                    </div> 
                   
                    <div class="col-xs-12">
                     <!-- a)Description of project activities-->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('projAct', 'a)Description of project activities')!!}
                            </div>
                             <div class="col-xs-6">
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            </div>
                            </div>
                     <!-- b)The description and genetics of the LMO -->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('genDes', 'b)The description and genetics of the LMO')!!}
                            </div>
                             <div class="col-xs-6">
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            </div>
                            </div>

                    <!-- c)The emergency response plan and the specific measures to be taken in relation to a contained use activity involving LMO.-->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('Resplzn', 'c)The emergency response plan and the specific measures to be taken in relation to a contained use activity involving LMO.')!!}
                            </div>
                             <div class="col-xs-6">
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            </div>
                            </div>

                     <!-- d)All persons involved are appropriately trained:.-->
                            <div class="col-xs-12">
                            <div class="col-xs-6">
                             {!! Form::label('psnsInvld', 'd)All persons involved are appropriately trained:')!!}
                            </div>
                             <div class="col-xs-6">
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                            </div>
                            </div>
                            </div>
                    </div>
             <!-- 8.Has the information provided in Form NBB/N/CU/15/FORM E been checked by the IBC and found to be complete?-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('DIA', ' 8.Has the information provided in Form NBB/N/CU/15/FORM E been checked by the IBC and found to be complete?')!!}
                        </div>
                        <div class="col-xs-6">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'No') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>
                        </div>
                        </div>
                    </div> 

             <!-- 8.Has the information provided in Form NBB/N/CU/15/FORM E been checked by the IBC and found to be complete?-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('DIA', ' 9.Has the IBC assessed the biosafety of the proposed project?The risks that the IBC is required to assess are:')!!}
                        </div>
                        
                        <div class="col-xs-6">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        </div>
                    </div> 
                    <div class="col-xs-12">
                    <p>a) risks to the health and safety of human (occupational exposure) from the activities associated with genetic modification</p>
                        <p>b) risks to the health and safety of human and animals from an unintentional release of the LMO; and</p>
                        <p>c) risks to the environment from an unintentional release of the LMO</p>
                        <p>Please append a copy of the IBC’s assessment report and indicate the attachment in which details are provided.
                        (For the IBC Assessment report, please use IBC/AP/15/ANNEX2 from</p>
                        
                        <a href="http://www.biosafety.nre.gov.my/guideline.shtml#annex2">http://www.biosafety.nre.gov.my</a>
                    </div>
    </fieldset>
    <hr>
    <fieldset>
        <h4><strong>Part A: General Information</strong></h4>
        <div class="form-group">
        <div class="col-xs-12">
            <p>1. Project team members’ details.</p>
            <p>Information required is only for key persons involved in the project. IBC should have a record of ALL persons involved in the project.)</p>
            <p><strong>Table 1 Description of team members’ details</strong></p>
        </div>   
        <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Address, contact number & email</th>
                            <th>Qualification</th>
                            <th>Designation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>                            
                            {!! Form::text('name')!!}
                            </td>
                            <td>                            
                            {!! Form::text('add', 'Your Address')!!}
                            {!! Form::text('No', 'Tele number')!!}
                            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </td>
                            <td>
                            {!! Form::text('Qual')!!}
                            </td>
                            <td>
                            {!! Form::text('Desig')!!}   
                            </td>
                          </tr>
                           <tr>
                            <td>2</td>
                            <td>                            
                            {!! Form::text('name')!!}
                            </td>
                            <td>                            
                            {!! Form::text('add', 'Your Address')!!}
                            {!! Form::text('No', 'Tele number')!!}
                            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </td>
                            <td>
                            {!! Form::text('Qual')!!}
                            </td>
                            <td>
                            {!! Form::text('Desig')!!}   
                            </td>
                          </tr>
                           <tr>
                            <td>3</td>
                            <td>                            
                            {!! Form::text('name')!!}
                            </td>
                            <td>                            
                            {!! Form::text('add', 'Your Address')!!}
                            {!! Form::text('No', 'Tele number')!!}
                            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </td>
                            <td>
                            {!! Form::text('Qual')!!}
                            </td>
                            <td>
                            {!! Form::text('Desig')!!}   
                            </td>
                          </tr>
                           <tr>
                            <td>4</td>
                            <td>                            
                            {!! Form::text('name')!!}
                            </td>
                            <td>                            
                            {!! Form::text('add', 'Your Address')!!}
                            {!! Form::text('No', 'Tele number')!!}
                            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </td>
                            <td>
                            {!! Form::text('Qual')!!}
                            </td>
                            <td>
                            {!! Form::text('Desig')!!}   
                            </td>
                          </tr>
                           <tr>
                            <td>5</td>
                            <td>                            
                            {!! Form::text('name')!!}
                            </td>
                            <td>                            
                            {!! Form::text('add', 'Your Address')!!}
                            {!! Form::text('No', 'Tele number')!!}
                            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            </td>
                            <td>
                            {!! Form::text('Qual')!!}
                            </td>
                            <td>
                            {!! Form::text('Desig')!!}   
                            </td>
                          </tr>
                        </tbody>
                      </table>
        </div>

    </fieldset>
    <hr>
    <fieldset>
        <h4><strong>Part B: Project Introduction</strong></h4>
        <div class="col-xs-12">
            <p>In this Part, the applicant is required to describe the proposed activities with the LMO within the context of the project. </p>

            <!-- 2. General Objective::-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('genObj', '2. General Objective::', ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('genObj', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>  
              <!-- Specific Objective(s): (if any)-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-8">
                             {!! Form::label('genObjOtr', '2.Specific Objective(s): (if any)', ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('genObjOtr', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div> 
            <!-- 3. Description of project activities (please provide flow chart of the activities and the premises where each activity is conducted):-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('projAct', '3. Description of project activities (please provide flow chart of the activities and the premises where each activity is conducted):',   ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('projAct', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>
             <!-- 4. Biosafety Level (BSL) : (the biosafety containment level  is determined by the risk assessment of the activity) :-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('Biosafety_level', ' 4. Biosafety Level (BSL) : (the biosafety containment level  is determined by the risk assessment of the activity) :')!!}
                        </div>
                        
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', ' BSL 1 ') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'BSL 2 ') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', ' BSL 3  ') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'BSL 4 ') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        </div>
                    </div>  

            <!-- 5. Estimated duration of activity (please provide Gantt chart ):-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Estimated_duration', '5. Estimated duration of activity (please provide Gantt chart ):',   ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Estimated_duration', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>
            <!-- 6. Intended Date of Commencement:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Date_of_Commencement', '6. Intended Date of Commencement: ',   ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::text('date', '', array('id' => 'datepicker')) !!}
                        </div>
                        </div>
                    </div>
            <!-- 7. Expected Date of Completion:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Expected_duration', '7. Expected Date of Completion:',   ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>
            <!-- 8. Date of importation or intended importation (for an imported LMO).
test-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Date_import', '8. Date of importation or intended importation (for an imported LMO).test',   ['class' => ' control-label'])!!}
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>
            <!--9. If the experiments are successful are there plans for an application for field experiment? -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-6">
                             {!! Form::label('Biosafety_level', '9. If the experiments are successful are there plans for an application for field experiment? :')!!}
                        </div>
                        
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', ' Yes') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>
                        <div class="col-xs-3">
                        <div class="checkbox">
                            {!! Form::label('checkbox', 'No ') !!}
                            {!! Form::checkbox('checkbox') !!}                          
                        </div>                        
                        </div>

        </div>

    </fieldset>
    <hr>
    <fieldset>
        <h4><strong>Part C: Description of the LMO</strong></h4>
        <div class="form-group">
        <div class="col-xs-12">
        <p>Please refer to the explanatory notes on part C before filling in the specific information in a tabulated form as shown below.</p>
        <p><strong>Table 2 Description of the LMO for contained use activities</strong></p>
        </div>
        <div class="col-lg-12">
         <div class="table-responsive">          
                      <table class="table">
                        <thead>
                          <tr>
                          <th>LMO</th>
                          <th>Common and scientific name(s) of parent
                                organism (recipient)</th>
                          <th>Common and scientific  name(s) of donor organism</th>
                          <th>Vector(s) and method of genetic modification </th>
                          <th>Class of modified trait (Refer to Box 1 of the Explanatory Notes) )</th>
                          <th>Modified trait</th>
                          <th> Number of genes involved (Please provide the gene construct(s) map)</th>
                          <th>Identity and function of the gene(s) involved</th>


                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                           {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}  
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                                {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                           {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}  
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                                {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>                            
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                           {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}  
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                            {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                            <td>
                                {!! Form::textarea('Expected_duration', $value = null, ['class' => 'form-control', 'rows' => 2])!!}
                            </td>
                          </tr>
                           
                           
                        </tbody>
                      </table>
        </div>
        </div>
    </fieldset>
    <hr>
     <fieldset>
        <h4><strong>Part D: Risk assessment and management<strong></h4>
        <div class="form-group">
        <div class="col-xs-12">
        <p><strong>D1 Risk Assessment (Basic information)</strong></p>
        <p>10. What are the possible hazard(s) and the likelihood and consequence of the hazard(s) occurring (i.e. the risk) from the proposed genetic modification(s) including unintentional release to the health and safety of human and animals, and the environment? 
        You are required to fill in the matrix below. Please refer to Chapter 4 of </p>
         <a href="www.biosafety.nre.gov.my/guideline.shtml">Biosafety Guidelines: Contained use activity of Living Modified Organism</a>
        
        </div>
        <div class="col-lg-12">
         <div class="table-responsive">          
                      <table class="table">
                        <caption><strong>Risk assessment matrix</strong></caption>
                        <thead>
                            <tr>
                                <th>
                                    Hazard from
                                </th>
                                <th>
                                    Identification of hazard Potential hazard
                                </th>
                                <th>
                                    Comments on risk
                                </th>
                                <th>
                                    Risk Management by applicant
                                </th>
                                <th>
                                    Residual risk
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="col-xs-3">
                                    Science of Genetic modification
                                </td>
                                
                            </tr>
                          
                                
                           
                        </tbody>
                      </table>
        </div>
        </div>
        <hr>
    
        <div class="col-xs-12">
        <h4><strong>D2 Risk Management</strong></h4>
            <!-- 11. Do you propose to transport the LMO outside the premises or between premises?  :-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Transport_mode', '11. Do you propose to transport the LMO outside the premises or between premises?:', ['class' => ' control-label'])!!}
                             <p><em>If yes, provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety   Guidelines. </em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Transport_mode', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>  

            <!-- 12. How will the LMO be disposed of?:-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_Disposed', '12. How will the LMO be disposed of?', ['class' => ' control-label'])!!}
                             
                             <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.  If the activity involves LMO at various growth stages (seedlings, trees), the SOP should cover the disposal of LMO at each growth stage. </em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_Disposed', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>  

            <!-- 13. How will the solid and liquid wastes from the activities (e.g. media, disposable gloves, planting materials, plant parts, etc.) be treated and disposed of? -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_Disposed_soliliqwaste', '13. How will the solid and liquid wastes from the activities (e.g. media, disposable gloves, planting materials, plant parts, etc.) be treated and disposed of? ', ['class' => ' control-label'])!!}
                             
                             <p><em> Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.</em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_Disposed_soliliqwaste', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>  

            <!-- 14. How will the wastewater from the activities be disposed of? (e.g water used for cleaning equipment, watering the plants, etc.)-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_waterwaste_Disposed', '14. How will the wastewater from the activities be disposed of? (e.g water used for cleaning equipment, watering the plants, etc.)', ['class' => ' control-label'])!!}
                             
                             <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines. </em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_waterwaste_Disposed', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>

            <!-- 15. How will the equipment/tools/surfaces used during the activities be decontaminated? (e.g. sharps, pipette, decontaminated glassware, etc.)-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_tools_decontaminated', '15. How will the equipment/tools/surfaces used during the activities be decontaminated? (e.g. sharps, pipette, decontaminated glassware, etc.)', ['class' => ' control-label'])!!}
                             
                             <p><em>Provide specific Standard Operating Procedures (SOPs) which are compliant with the Biosafety Guidelines.</em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_tools_decontaminated', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>
        </div>
        <hr>
            <div class="col-xs-12">
        <h4><strong>D2 Risk Management</strong></h4>
            <!-- 16.Provide plans for protecting human and animal health and the environment in case of the occurrence of an undesirable effect observed during contained use activities.-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_to_Protect', '16.Provide plans for protecting human and animal health and the environment in case of the occurrence of an undesirable effect observed during contained use activities.', ['class' => ' control-label'])!!}
                             <p><em>management which includes first aid and hospitalization, line of communication both within and outside the organization). </em></p>
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_to_Protect', $value = null, ['class' => 'form-control', 'rows' => 3])!!}
                        </div>
                        </div>
                    </div>  

            <!-- 17. Provide plans for disposal of plants, animals and any other organisms exposed during the unintentional release. -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Plans_to_dispose', '17. Provide plans for disposal of plants, animals and any other organisms exposed during the unintentional release. ', ['class' => ' control-label'])!!}
                             
                            
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Plans_to_dispose', $value = null, ['class' => 'form-control', 'rows' => 3])!!}

                        </div>
                        </div>
                    </div>

             <!-- 18. Provide plans for isolation of the area affected by the unintentional release (e.g. evacuation and quarantine). -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('How_isolate_affected_area', '18. Provide plans for isolation of the area affected by the unintentional release (e.g. evacuation and quarantine).', ['class' => ' control-label'])!!}
                             
                            
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('How_isolate_affected_area', $value = null, ['class' => 'form-control', 'rows' => 3])!!}

                        </div>
                        </div>
                    </div>

            <!-- 19. Provide details of any other contingency measure that will be in place to rectify any unintended consequences if an adverse effect becomes evident during the contained use activities, or when an unintentional release occurs.-->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('other_contengency_measures', '19. Provide details of any other contingency measure that will be in place to rectify any unintended consequences if an adverse effect becomes evident during the contained use activities, or when an unintentional release occurs.', ['class' => ' control-label'])!!}          
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('other_contengency_measures', $value = null, ['class' => 'form-control', 'rows' => 3])!!}

                        </div>
                        </div>
                    </div>
                    <hr>

                    <div class="col-lg-12">
                    <h4><strong>Part E: The Premises</strong></h4>
                    <p><strong>20. Please provide information for all of the facilities being used for the confined activities in the table below.<strong></p>
                    <p><em>Note 1: For a Research and Development collaboration involving more than one IBC, please provide proof of collaboration (such as letter of authorization) to use the premises.<br />
                    Note 2: * For notifications with more than one premises; use itional columns if necessary.<br />
                    Table 3: Details of premises</em></p>
                     <div class="table-responsive">          
                                  <table class="table">
                                    <caption><strong>Risk assessment matrix</strong></caption>
                                    <thead>
                                        <tr>
                                            <th>
                                                Information required 
                                            </th>
                                            <th>
                                                Premises 1
                                            </th>
                                            <th>
                                                Premises 2*
                                            </th>
                                            <th>
                                                Premises 3*
                                            </th>
                                            <th>
                                                Premises 4*
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>
                                            1.Name of premises:
                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.1', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.1', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.1', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.1', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            2.Premises type: 
(e.g. animal containment premises, laboratory, insect containment premises, greenhouse, etc,)
(Please specify if it is a large scale facility involving culture volume greater than or equal to 10L of culture of  any LMO)
                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.2', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.2', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.2', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.2', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                         <tr>
                                            <td>
                                            3.Biosafety level (BSL):

                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.3', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.3', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.3', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.3', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                         <tr>
                                            <td>
                                           4. Who undertook the inspection of the premises?
                                    <em>(please indicate which IBC)</em>

    
                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.4', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.4', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.4', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.4', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            5.Date of the most-recent inspection :

                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.5', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.5', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.5', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.5', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            6.Fill the following if premises is BSL 3 or BSL 4:
Date of certification by competent authority

Certificate reference no:
Attach latest inspection report.


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.6', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.6', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.6', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.6', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                         <tr>
                                            <td>
                                            7. Address of premises:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.7', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.7', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.7', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.7', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                         <tr>
                                            <td>
                                            8.Name of  contact person for premises/ Biosafety Officer Name:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            8.Name of  contact person for premises/ Biosafety Officer Name:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.8', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                            9.Business phone number:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.9', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.9', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.9', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.9', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                           10.Mobile phone number:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.10', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.10', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.10', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.10', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>
                                           11.Fax number:


                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.11', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.11', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.11', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.11', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>
                                         <tr>
                                            <td>
                                           12.Email address:



                                            </td>
                                            <td>
                                {!! Form::textarea('premises1.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises2.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises3.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            <td>
                                {!! Form::textarea('premises4.12', $value = null, ['class' => 'form-control', 'rows' => 2])!!}   
                                            </td>
                                            
                                        </tr>

                                            
                                       
                                    </tbody>
                                  </table>
                    </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                     <h4><strong>Part F: Confidential Business Information</strong></h4>
                    <div class="form-group">
                    <div class="col-xs-12">
                        <p>Enter in this section any information required in Part A - E for which confidentiality is claimed together with full justification for that claim.
                        Criteria for confidentiality are as follows (section 59 of Biosafety Act 2007):</p>

                        <!-- 17. Provide plans for disposal of plants, animals and any other organisms exposed during the unintentional release. -->
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                             {!! Form::label('Plans_to_dispose', '
                              ', ['class' => ' control-label'])!!}
                              <p>a)That the information is not known generally among, or readily accessible to, any person within the circle that normally deals with the kind of information sought to be made confidential;</p>
                              <p>b) That the information has commercial value because it is secret; and</p>
                              <p>c) Those reasonable steps have been taken to keep the information secret.</p>
                             
                            
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Plans_to_dispose', $value = null, ['class' => 'form-control', 'rows' => 12])!!}

                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>
                    <hr>
                    <div class="col-xs-12">
                     <h4><strong>Part G: List of references</strong></h4>
                    <div class="form-group">
                    <div class="col-xs-12">
                        
                  
                    <div class="form-group">
                        <div class="col-xs-12">
                        <div class="col-xs-12">
                        </div>
                        <div class="col-xs-12">
                        {!! Form::textarea('Refferences', $value = null, ['class' => 'form-control', 'rows' => 12])!!}

                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    </div>


    </fieldset>
<hr>

    <h3>EXPLANATORY NOTES FOR FORM E</h3><br><br>
    <h4>NOTIFICATION FOR CONTAINED USE AND IMPORT FOR CONTAINED USE ACTIVITIES

INVOLVING LIVING MODIFIED ORGANISM (LMO) FOR BIOSAFETY LEVELS 1, 2, 3 AND 4</h4>

<p>NBB/N/CU/15/FORM E shall be submitted to the Director General as a notification for contained use and import for contained use (not involving release into the environment of Living Modified Organism (LMO) as specified in Second Schedule of the Act). Any organization undertaking modern biotechnology research and development shall submit the notification through its Institutional Biosafety Committee (IBC) that is registered with the National Biosafety Board (NBB). The IBC should do an assessment prior to submission. Not all parts in this form will apply to every case. Therefore, applicants will only address the specific questions/parameters that are appropriate to individual applications.
</p>
<p>In each case where it is not technically possible or it does not appear necessary to give the information, the reasons shall be stated. The risk assessment, risk management plan, emergency response plan and the fulfillment of any other requirements under the Biosafety Act 2007 will be the basis of the decision by the NBB.</p>
<p>The applicant shall submit 1 original and 6 copies of the notification to the Director General. This submission should be accompanied by a cover letter form the applicant’s institution. A soft copy of the submitted notification (including all supporting documents/attachments, if any) shall also be             provided in the form of a CD by the applicant. However, all information that has been                      declared as Confidential Business Information (CBI) should be omitted from the CD.</p>
<p>
<strong>Providing information</strong>
The information provided in this notification will be used to evaluate the emergency response plan as specified in section 37 of the Biosafety Act 2007 and specific measures to be taken in relation to a contained use activity involving LMO. Thus it is important to provide accurate and timely information that is as comprehensive as existing scientific knowledge would permit, and supported by whatever data available.</p>
<p>If the LMO is imported, detail of importer, date of intended importation and approval from relevant authorities like Department of Agriculture (DOA), Ministry of Health, Malaysia, etc. should be provided.</p>
<p>The NBB may require additional information, and the applicant will be notified should this be the case. If the applicant fails to provide the additional information requested, the notification shall be deemed to have been withdrawn but it shall not affect the right of the applicant to make a fresh</p>
<p><strong>Description of LMO (Part C)</strong>
Parent organism refers to the final recipient of the intended genetic modification
Donor organism refers to the source of the genetic sequences used for modification.
Vector should include all vectors and method (s) used.
Modified trait can be stated as “unknown” if for example building a genomic library,
Identity and function of gene(s) of donor organism responsible for the modified trait can be stated as “unknown” if for example building a genomic library.
Target organism(s) of the LMO refers to the organism (s) that is expected to be affected or to interact with the LMO</p>
<p><strong>Class of modified trait, please refer box below.</strong> 
If the LMO has more than one modified trait please list all. If the modified trait is not listed in the Box 1, please list it as “other” and provide details of the modified traits</p>


 <div class="table-responsive">          
                      <table class="table">
                        <caption><strong>Box 1: Class of modified trait</strong></caption>
                        <thead>
                            <tr>
                                <th>
                                    NO
                                </th>
                                <th>
                                    IClass (type) of trait
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                1.
                                </td>
                                <td>
                                Abiotic stress resistance
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                2.
                                </td>
                                <td>
                                Altered agronomic characteristics
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                3.
                                </td>
                                <td>
                               Altered nutritional characteristics
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                4.
                                </td>
                                <td>
                               Altered pharmaceutical characteristics
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                5.
                                </td>
                                <td>
                               Altered physical product characteristics
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                6.
                                </td>
                                <td>
                               Antibiotic resistance
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                7.
                                </td>
                                <td>
                               Foreign antigen expression
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                8.
                                </td>
                                <td>
                               Attenuation
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                9.
                                </td>
                                <td>
                               Bacterial resistance
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                10.
                                </td>
                                <td>
                               Disease resistance
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                11.
                                </td>
                                <td>
                              Flower colour
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                12.
                                </td>
                                <td>
                              Fungal resistance

                                </td> 
                            </tr>
                            <tr>
                                <td>
                                13.
                                </td>
                                <td>
                              Herbicide tolerance
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                14.
                                </td>
                                <td>
                              Immuno-modulatory protein expression
                                </td> 
                            </tr>
                             <tr>
                                <td>
                                15.
                                </td>
                                <td>
                             Pest resistance e.g. insect resistance
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                16.
                                </td>
                                <td>
                             Protein expression
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                17.
                                </td>
                                <td>
                             Reporter/marker gene expression
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                17.
                                </td>
                                <td>
                             Virus resistance
                                </td> 
                            </tr>
                            <tr>
                                <td>
                                19.
                                </td>
                                <td>
                             Others (please specify)
                                </td> 
                            </tr>
                          
                                
                           
                        </tbody>
                      </table>
                      </div>


         <p><strong>Accuracy of information</strong>

The notification should also be carefully checked before submission to ensure that all the information is accurate. If the information provided is incorrect, incomplete or misleading, the NBB may issue a withdrawal of the acknowledgement of receipt of notification without prejudice to the submission of a fresh notification</p>             

<p><strong>Confidentiality</strong>

Any information within this notification which is to be treated as CBI, as described in the Biosafety Act 2007 in section 59(3) should be clearly marked “CBI” in the relevant parts of the notification by providing the justification for the request for CBI. The following information shall not be considered confidential:</p>

<ol>
    <li>The name and address of the applicant </li>
    <li>A summary of the risk assessment of the effects on the conservation and sustainable use of biological diversity, taking also into account risks to human health; and </li>
    <li> Any methods and plans for emergency response </li>
</ol>

<p><strong>Authorization</strong>

Please ensure that if this notification is being completed on behalf of the proposed user, that the person completing this notification holds proper authority to submit this notification for the proposed user. Please provide written proof of authorization.</p>
<p>For further information or any queries related to filling up this form<br>

Please contact the office of the Director General by:<br><br>

Telephone: 603-8886 1580<br><br>

E-mail: biosafety@nre.gov.my</p>

<p>The completed form and cover letter to be submitted as follows:<br>

The Director General<br>

Department of Biosafety<br>

Ministry of Natural Resources and Environment Malaysia<br>

Level 1, Podium 2<br>

Wisma Sumber Asli, No. 25, Persiaran Perdana<br>

Precinct 4, Federal Government Administrative Centre<br>

62574 Putrajaya, Malaysia.</p>

<p><strong>Acknowledgement of Receipt</strong>

Upon receipt of the notification, the Director General shall send to the applicant an acknowledgement of receipt with an assigned reference number. The reference number should be used in all correspondence with respect to the notification.</p>
<p><strong>Exemption</strong>

The First Schedule of the Biosafety (Approval and Notification) Regulations 2010 allows exemptions for some types of techniques and contained use activities in relation to LMO posing a very low risk (i.e. contained research activities involving very well understood organisms and processes for creating and studying LMO). Exempted activities should be carried out under conditions of standard laboratory practice. Appropriate biosafety levels as according to Second Schedule of the Biosafety (Approval and Notification) Regulations 2010 should be used for the exempted activities and personnel should have appropriate training. Principal Investigators who believe that the work falls into any of the exemptions should nevertheless notify their IBC of the proposed project. The IBC may review all submitted research projects to determine their exemption or non-exemption status.</p>





   </div>
   </div>



    
    {!! Form::close()  !!}
</body>
 
</html>