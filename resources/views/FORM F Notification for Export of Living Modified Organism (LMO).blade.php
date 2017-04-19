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
      <h1 align="center">BIOSAFETY ACT 2007</h1>
      <h2 align="center">BIOSAFETY REGULATIONS 2010</h2>
      <h2 align="center">NBB/N/Ex/10/FORM F</h2>

      <h3 align="center">Notification for Export of Living Modified Organism (LMO)</h3>
      <hr>
      <div class="col-xs-12">
      <p>NBB/N/Ex/10/FORM F shall be submitted to the Director General as a notification for export of LMO under the Biosafety Act 2007. The applicant shall submit 1 original and 6 copies of the notification to the Director General. A soft copy of the submitted notification (including all supporting documents/attachments, if any) shall also be provided in the form of a CD by the applicant. However, all information that has been declared as Confidential Business Information (CBI) should be omitted from the CD.</p>

      <p><strong>Accuracy of Information</strong><br>
          The notification should be carefully checked before submission to ensure that all the information is accurate. If the information provided is incorrect or incomplete or misleading, the Director General may issue a withdrawal of the acknowledgement of submission of notification without prejudice to the submission of a fresh notification.</p>
      <p><strong>Compliance with Requirements of Importing Country</strong>
      The applicant is required to comply with all the requirements of the importing country to export LMO. Evidence of compliance should be submitted with this notification. </p>
      <p><strong>Confidentiality</strong> 
          Any information within this application which is to be treated as Confidential Business Information (CBI), as described in the Biosafety Act 2007 in section 59(3) should be clearly marked “CBI” in the relevant parts of the application by providing the justification for the request for CBI. The following information shall not be considered confidential:<br>
            a) The name and address of the applicant<br>
            b) Description of the LMO</p>
            <div class="col-xs-6">  
              <p><strong>For further information:</strong><br>
                  Please contact the Director General by:<br>
                  Telephone: 03-8886 1579<br>   
                  <a href="biosafety@nre.gov.my">Email: biosafety@nre.gov.my</a>
              </p>
              <p>
                  <strong>The completed form to be submitted as follows:</strong><br>
                  Director General<br>  
                  Department of Biosafety<br> 
                  Ministry of Natural Resources and Environment Malaysia<br> 
                  Level 1, Podium 2<br> 
                  Wisma Sumber Asli, No. 25, Persiaran Perdana<br> 
                  Precinct 4, Federal Government Administrative Centre<br> 
                  62574 Putrajaya, Malaysia
              </p>
            </div>

        <p>
        <strong>Acknowledgement of Receipt</strong><br>
          Upon receipt of the notification, the Director General shall send to the applicant an acknowledgement of receipt with an assigned reference number. The reference number should be used in all correspondence with respect to the notification.
        </p>
        <p><strong>Exemption</strong>
            An applicant who has submitted a Notification for export of LMO and has received an Acknowledgement of Receipt from the Director General is exempt from making any subsequent Notifications for the same LMO, to the same country for the same purpose (as specified in the Acknowledgement of Receipt). However, there is no exemption for compliance with all the requirements of the importing country to export LMO for each subsequent Export.</p>
    </div>
    </fieldset>
    <fieldset>
      <legend>
        NOTIFICATION CHECK LIST
      </legend>
      <div class="col-xs-12">
        <div class="table-responsive" align="center">          
          <table class=" table-condensed">
            <tbody>
              <tr >
                <td class="col-xs-8">1.Form NBB/N/Ex/10/FORM F is completed with relevant signatures obtained</td>
                <td class="col-xs-4">{!!Form::checkbox('1', 'value');!!}</td>
              </tr>
              <tr>
                <td class="col-xs-8">2. Any information to be treated as confidential business information should be clearly marked “CBI” in the notification</td>
                <td class="col-xs-4">{!!Form::checkbox('2', 'value');!!}</td>
              </tr>
              <tr>
                <td class="col-xs-12">3. 1 original and 6 copies of the complete notification submitted. A soft copy of the submitted notification (including all supporting documents/attachments, if any) that do not contain any CBI.</td>
                <td class="col-xs-4">{!!Form::checkbox('3', 'value');!!}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </fieldset>
    <hr>
    <fieldset>
      <legend>
        Part 1 Details of the Applicant (Exporter) 
      </legend>
      
        <div class="table-responsive" >          
          <table class="table">
            <tbody>
              <tr >
                <td class="col-xs-6">1. Organization:</td>
                <td class="col-xs-6">{!! Form::text('Organizations', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">2. Name of Applicant:</td>
                <td class="col-xs-6">{!! Form::text('name_applicant', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6"><p>3. Position in Organization:<br>
                Telephone (office):<br>
                Telephone (mobile):<br>
                Fax number:<br>
                Email:<br>
                Postal Address:</p></td>
                <td class="col-xs-6">{!! Form::textarea('position_org', $value = null, ['class' => 'form-control', 'rows' => 3])!!}</td>
              </tr>
            </tbody>
          </table>
        </div>   
    </fieldset>
    <fieldset>
      <legend>
        Part 2  Details of LMO to be exported 
      </legend>
      
        <div class="table-responsive" >          
          <table class="table">
            <tbody>
              <tr >
                <td class="col-xs-6">1.Description of LMO to be exported</td>
                <td class="col-xs-6">{!! Form::text('LMO_Exported', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6"><p>
                    a. Plant<br>
                    b. Fish/shellfish<br>
                    c. Virus<br>
                    d. Animal<br>
                    e. Micro-organism (bacterium/fungus etc.)<br>
                    f. Animal cell <br>
                    g. Others (Please specify)</p></td>
                <td class="col-xs-6">{!! Form::textarea('', $value = null, ['class' => 'form-control', 'rows' => 7])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">2.Identification of LMO </td>
                <td class="col-xs-6">{!! Form::text('Identification_LMO', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6"><p>3.Common name(s)<br> 
                Scientific name</p> </td>
                <td class="col-xs-6">{!! Form::text('Comn_Name', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">4.Introduced  Trait(s)</td>
                <td class="col-xs-6">{!! Form::text('Into_Traits', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">5.Intended use of LMO</td>
                <td class="col-xs-6">{!! Form::text('Intened_use_lmo', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">6.Describe the form in which LMO will be exported e.g. as seeds, cuttings, live fish, etc.</td>
                <td class="col-xs-6">{!! Form::textarea('form_lmo_exported', $value = null, ['class' => 'form-control', 'rows' => 4])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">7.Mode of export: <br> 
                  Sea<br> 
                  Rail<br> 
                  Road <br> 
                  Air<br> 
                  Others (Please specify) </td>
                <td class="col-xs-6">{!! Form::text('mode_export', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">8.Point of exit: 
                </td>
                <td class="col-xs-6">{!! Form::text('Exit', $value = null, ['class' => 'form-control', 'rows' => 2])!!}</td>
              </tr>
              <tr>
                <td class="col-xs-6">9.Suggested methods for safe handling, storage, transport and use (if available)  
                </td>
                <td class="col-xs-6">{!! Form::text('Exit', $value = null, ['class' => 'form-control', 'rows' => 3])!!}</td>
              </tr>
            </tbody>
          </table>
        </div>   
    </fieldset>
    <hr>
    <fieldset>
      <p>
        <strong>Part 3  Importing Country</strong><br>
          1) Name of importing country <br>
          2) Evidence of compliance with importing country’s requirements (e.g. Copy of Import permit, copy of approval from competent authority, etc.)
      </p>
      <p>
      <strong>Part 4 Confidential Business Information</strong><br>
        Enter in this section any information required in Part 1-3 for which you are claiming confidentiality, together with full justification for that claim.
      </p>
      <p>
        <strong>Part 5 Signatures and Statutory Declaration</strong><br>
          We declare that all information and documents provided to the importing country are accurate and true and in compliance with the requirements of the importing country. 
          We also understand that providing misleading information to the National Biosafety Board (NBB), deliberately or otherwise, is an offence under the Biosafety Act 2007.
      </p>
    </fieldset>
    </div>
 
    {!! Form::close()  !!}
 
</div>
</div>
</body>
 
</html>