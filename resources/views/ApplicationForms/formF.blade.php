@extends('layouts.app')
@section('title',  '| Homepage')
@section('content')
<div id="wrapper" class="active">
    
    <!-- Sidebar -->
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand">menu</li>
        </ul>
        @include('includes.sidebar')
    </div>
    
    <!-- Page content -->
    <div id="page-content-wrapper">
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
            <div class="row">
                <h3>BIOSAFETY ACT 2007</h3>
                <h3>BIOSAFETY REGULATIONS 2010</h3>
                <h2>NBB/N/Ex/10/FORM F</h2>
                <div class="well">
                    
                    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
                    <h4 align="center">Notification for Export of Living Modified Organism (LMO)</h4>
                    <p>NBB/N/Ex/10/FORM F shall be submitted to the Director General as a notification for export of LMO under the Biosafety Act 2007. The applicant shall submit 1 original and 6 copies of the notification to the Director General. A soft copy of the submitted notification (including all supporting documents/attachments, if any) shall also be provided in the form of a CD by the applicant. However, all information that has been declared as Confidential Business Information (CBI) should be omitted from the CD.</p>
                    <br>
                    <h4>Accuracy of Information</h4>
                    <p>The notification should be carefully checked before submission to ensure that all the information is accurate. If the information provided is incorrect or incomplete or misleading, the Director General may issue a withdrawal of the acknowledgement of submission of notification without prejudice to the submission of a fresh notification.</p>
                    <br>
                    <h4>Compliance with Requirements of Importing Country</h4>
                    <p>The applicant is required to comply with all the requirements of the importing country to export LMO. Evidence of compliance should be submitted with this notification. </p>
                    <br>
                    <h4>Confidentiality </h4>
                    <p>Any information within this application which is to be treated as Confidential Business Information (CBI), as described in the Biosafety Act 2007 in section 59(3) should be clearly marked “CBI” in the relevant parts of the application by providing the justification for the request for CBI. The following information shall not be considered confidential:
                        <ul id="lstgroup">
                            <li>The name and address of the applicant</li>
                            <li>Description of the LMO</li>
                        </ul>
                    </p>
                    <br>
                    <h4>For further information:</h4>
                    <p>Please contact the Director General by:<br>
                        Telephone: 03-8886 1579     <br>
                    Email: biosafety@nre.gov.my </p>
                    <br>
                    <h4>The completed form to be submitted as follows:</h4>
                    <p>Director General <br>
                        Department of Biosafety <br>
                        Ministry of Natural Resources and Environment Malaysia  <br>
                        Level 1, Podium 2   <br>
                        Wisma Sumber Asli, No. 25, Persiaran Perdana    <br>
                        Precinct 4, Federal Government Administrative Centre    <br>
                        62574 Putrajaya, Malaysia
                    </p>
                    <br>
                    <h4>Acknowledgement of Receipt</h4>
                    <p>Upon receipt of the notification, the Director General shall send to the applicant an acknowledgement of receipt with an assigned reference number. The reference number should be used in all correspondence with respect to the notification.</p>
                    <br>
                    <h4>Exemption</h4>
                    <p>An applicant who has submitted a Notification for export of LMO and has received an Acknowledgement of Receipt from the Director General is exempt from making any subsequent Notifications for the same LMO, to the same country for the same purpose (as specified in the Acknowledgement of Receipt). However, there is no exemption for compliance with all the requirements of the importing country to export LMO for each subsequent export.</p>
                    <br>
                    <fieldset>
                        <legend>Type of NLRD Dealing (check the box that applies)  – Schedule 3, Part 2, 2.1</legend>
                        <div class="row col-xs-12">
                            <table id="bio1" class="table-bordered" width="100%" cellspacing="0">
                                
                                <tbody>
                                    <tr>
                                        <td>
                                            <p class="col-xs-12" id ="listitm" >
                                                1.  Form NBB/N/Ex/10/FORM F is completed with relevant signatures obtained
                                            </p>
                                        </td>
                                        <td> <input type="checkbox" value="1"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="col-xs-12" id ="listitm" >
                                                2. Any information to be treated as confidential business information should be clearly marked “CBI” in the notification
                                            </p>
                                        </td>
                                        <td> <input type="checkbox" value="2"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p class="col-xs-12" id ="listitm" >
                                                3. 1 original and 6 copies of the complete notification submitted. A soft copy of the submitted notification (including all supporting documents/attachments, if any) that do not contain any CBI.
                                            </p>
                                        </td>
                                        <td> <input type="checkbox" value="2"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </fieldset>
                    <br>
                    <fieldset>
                        <legend>Part 1 Details of the Applicant (Exporter)</legend>
                        <div class="row">
                            <div class="col-xs-12">
                                
                                <!-- Process or Location -->
                                <div class="form-group">
                                    
                                    <div class="col-xs-12">
                                        {!! Form::label('org', '1. Organization:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('org', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('name', '2. Name of Applicant:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('name', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <br>
                                    <div class="col-xs-12">
                                        {!! Form::label('pos', '3. Position in Organization:', ['class' => 'control-label']) !!} <br>
                                        <div class="col-xs-4">
                                            <p>Telephone (office):</p>
                                            {!! Form::text('teloffice', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-4">
                                            <p>Telephone (mobile):</p>
                                            {!! Form::text('mobile', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-4">
                                            <p>Fax number:</p>
                                            {!! Form::text('fax', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <br>
                                        <div class="col-xs-4">
                                            <p>Email:</p>
                                            {!! Form::text('email', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-4">
                                            <p>Postal Address:</p>
                                            {!! Form::text('postal', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Part 2  Details of LMO to be exported</legend>
                        <div class="row">
                            <div class="col-xs-12">
                                
                                <!-- Process or Location -->
                                <div class="form-group">
                                    
                                    <div class="col-xs-12">
                                        {!! Form::label('des', '1.Description of LMO to be exported:', ['class' => 'control-label']) !!}
                                        
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="col-xs-12">
                                            <p>a. Plant</p>
                                            {!! Form::text('plant', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>b. Fish/shellfish</p>
                                            {!! Form::text('fish', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>c. Virus</p>
                                            {!! Form::text('virus', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>d. Animal</p>
                                            {!! Form::text('animal', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>e. Micro-organism (bacterium/fungus etc.)</p>
                                            {!! Form::text('micro', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>f. Animal cell </p>
                                            {!! Form::text('acell', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        <div class="col-xs-12">
                                            <p>g. Others (Please specify)</p>
                                            {!! Form::text('other', $value = null, ['class' => 'form-control']) !!}
                                        </div>
                                        
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('identi', '2.Identification of LMO:', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('identi', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('cname', '3.Common name(s)', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('cname', $value = null, ['class' => 'form-control', 'placeholder' => 'Scientific name']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('trait', '4.Introduced  Trait(s)', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('trait', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('useof', '5.Intended use of LMO', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('useof', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('exp', '6.Describe the form in which LMO will be exported e.g. as seeds, cuttings, live fish, etc.', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('exp', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('mode', '7.Mode of export: ', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('mode', $value = null, ['class' => 'form-control', 'placeholder' => 'Sea/Rail/Road/Air/Others(Please specify)']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('point', '8.Point of exit: ', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('point', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-12">
                                        {!! Form::label('methods', '9.Suggested methods for safe handling, storage, transport and use (if available) ', ['class' => 'control-label']) !!}<br>
                                        {!! Form::text('methods', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Part 3  Importing Country</legend>
                        <div class="row">
                            <div class="col-xs-12">
                                <p> 1) Name of importing country <br>
                                    2) Evidence of compliance with importing country’s requirements (e.g. Copy of Import permit, copy of approval from competent authority, etc.)
                                </p>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Part 4 Confidential Business Information</legend>
                        <div class="row">
                            <div class="col-xs-12">
                                <p> 1Enter in this section any information required in Part 1-3 for which you are claiming confidentiality, together with full justification for that claim.
                                </p>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Part 5 Signatures and Statutory Declaration</legend>
                        <div class="row">
                            <div class="col-xs-12">
                                <p> We declare that all information and documents provided to the importing country are accurate    and true and in compliance with the requirements of the importing country. <br>
                                    We also understand that providing misleading information to the National Biosafety Board (NBB), deliberately or otherwise, is an offence under the Biosafety Act 2007.
                                </p>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Applicant </legend>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        {!! Form::label('sig', 'Signature:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('sig', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-6">
                                        {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <br>
                                    <div class="col-xs-12">
                                        {!! Form::label('identi', 'Name as in Identity Card/Passport:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('identi', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Head of organization/ Authorized Representative: </legend>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    
                                    <div class="col-xs-6">
                                        {!! Form::label('sig', 'Signature:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('sig', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <div class="col-xs-6">
                                        {!! Form::label('date', 'Date:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('date', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                    <br>
                                    <div class="col-xs-12">
                                        {!! Form::label('identi', 'Name as in Identity Card/Passport:', ['class' => 'control-label']) !!} <br>
                                        {!! Form::text('identi', $value = null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    {!! Form::close()  !!}
                </div>
            </div>
        </div>
    </div>
    
</div>
@stop