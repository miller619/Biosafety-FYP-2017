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
      
      @foreach ($userdetail as $userdetail)
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Name:</strong>
            {{$userdetail->user->name}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Staff/Student ID: </strong>
            {{$userdetail->user->userInstitutionID}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Designation:</strong>
            {{$userdetail->user->userDesignation}}
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
            <strong>Faculty:</strong>
            {{$userdetail->user->userFaculty}}
          </div>
        </div>
      </div>
    
    
    <div class="row">
      <div class="col-xs-6">
        <strong>1.Title:</strong><br>{{$userdetail->Title}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>2.Project Summary</strong><br>{{$userdetail->Project_summary}}<br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <strong>3.What are the possible hazard(s) or risk(s) involved?:</strong><br>{{$userdetail->Possible_hazards}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>4.Building number:</strong><br>{{$userdetail->Building_No}}<br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <strong>5.Room Number:</strong><br>{{$userdetail->Room_No}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>6.Containment Number:</strong><br>{{$userdetail->Containment_No}}<br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <strong>7.Has/have the Biosafety Officer(s)/Lab Manager responsible for the facilities where the dealing is to be conducted been made aware of this application:</strong><br>{{$userdetail->Awareness}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>8.Name of biosafety officer(s):</strong><br>{{$userdetail->name_of_officer}}<br><br>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6">
        <strong>9.Name of Laboratory Manager:</strong><br>{{$userdetail->name_lab_mngr}}<br><br><br>
      </div>
      <div class="col-xs-6">
       
      </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-xs-12">
            <h3>2.Researchers involved in the conduct of the project</h3> 
        </div>
    </div>
    

    @foreach($edform2 as $edform2)
    <div class="row">
      <div class="col-xs-6">
        <strong>1.Name:</strong><br>{{$edform2->name}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>2.Current qualifications:</strong><br>{{$edform2->current_qualification}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>3.Department:</strong><br>{{$edform2->department}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>4.Full Postal Address</strong><br>{{$edform2->p_address}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Telephone:</strong><br>{{$edform2->tele}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>6.Fax</strong><br>{{$edform2->fax}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Email:</strong><br>{{$edform2->email_address}}<br><br>
      </div>      
    </div>
    @endforeach

    <div class="row">
        <div class="col-xs-12">
            <h3>3.Additional people to be included in correspondence regarding this dealing</h3> 
        </div>
    </div>
    

    @foreach($edform3 as $edform3)
    <div class="row">
      <div class="col-xs-6">
        <strong>1.Name:</strong><br>{{$edform3->name}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>2.Current qualifications:</strong><br>{{$edform3->current_qualification}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>3.Department:</strong><br>{{$edform3->department}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>4.Full Postal Address</strong><br>{{$edform3->p_address}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Telephone:</strong><br>{{$edform3->tele}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>6.Fax</strong><br>{{$edform3->fax}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Email:</strong><br>{{$edform3->email_address}}<br><br>
      </div>      
    </div>
    @endforeach

    @foreach($edform3_2 as $edform3_2)
    <div class="row">
      <div class="col-xs-6">
        <strong>1.Name:</strong><br>{{$edform3_2->name}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>2.Current qualifications:</strong><br>{{$edform3_2->current_qualification}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>3.Department:</strong><br>{{$edform3_2->department}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>4.Full Postal Address</strong><br>{{$edform3_2->p_address}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Telephone:</strong><br>{{$edform3_2->tele}}<br><br>
      </div>
      <div class="col-xs-6">
        <strong>6.Fax</strong><br>{{$edform3_2->fax}}<br><br>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6">
        <strong>5.Email:</strong><br>{{$edform3_2->email_address}}<br><br>
      </div>      
    </div>
    @endforeach

 <div class="row">
        <div class="col-xs-12">
            <h3>4.Exemption Category</h3> 
        </div>
    </div>


<div class="row">
  <div class="col-xs-12">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th> </th>
            <th>Exemption Category</th>
          </tr>
        </thead>
    @foreach($edform4 as $edform4)
        <tbody>
          <tr>
            <td>
               {{ $edform4->one == "1" ? "Yes" : "No" }}         
            </td>
            <td>
              <p align="left">2)A dealing with a genetically modified Caenorhabditis elegans, unless:</p>
              <p align="left">(a) an advantage is conferred on the animal by the genetic modification or</p> 
              <p align="left">(b) as a result of the genetic modification, the animal is capable of secreting or producing an infectious agent.
              </p>
            </td>
          </tr>

          <tr>
            <td>
               {{ $edform4->two == "1" ? "Yes" : "No" }}         
            </td>
            <td>
              <p align="left">3)  A dealing with an animal into which genetically modified somatic cells have been introduced, if:</p>
              <p align="left">(a) the somatic cells are not capable of giving rise to infectious agents as a result of the genetic modification; and</p> 
              <p align="left">(b) the animal is not infected with a virus that is capable of recombining with the genetically modified nucleic acid in the somatic cells.
              </p>
            </td>
          </tr>

          <tr>
            <td>
               {{ $edform4->three == "1" ? "Yes" : "No" }}         
            </td>
            <td>
              <p align="left">3A) A dealing with an animal whose somatic cells have been genetically modified in vivo by a   replication defective viral vector, if:</p>
              <p align="left">(a) the in vivo modification occurred as part of a previous dealing; and</p>
              <p align="left">(b) the replication defective viral vector is no longer in the animal; and</p>
              <p align="left">(c) no germ line cells have been genetically modified; and</p>
              <p align="left">(d) the somatic cells cannot give rise to infectious agents as a result of the genetic       modification; and</p>
              <p align="left">(e) the animal is not infected with a virus that can recombine with the genetically modified nucleic acid in the somatic cells of the animal.</p>
            </td>
          </tr>

          <tr>
            <td>
               {{ $edform4->four == "1" ? "Yes" : "No" }}         
            </td>
            <td>
              <p align="left">4)<br>     
              (1) Subject to subitem (2), a dealing involving a host/vector system mentioned in Part 2 of  this Schedule and producing no more than 25 litres of GMO culture in each vessel containing the resultant culture.</p>
              <p align="left">(2) The donor nucleic acid:</p>
                    <p align="left">(a) must meet either of the following requirements:</p>
                      <p align="left">(i) it must not be derived from organisms implicated in, or with a history of           causing, disease in otherwise healthy:</p>
                        <p align="left">(A) human beings; or</p>
                        <p align="left">(B) animals; or</p>
                        <p align="left">(C) plants; or</p>
                        <p align="left">(D) fungi;</p>
              <p align="left">(ii) it must be characterised and the information derived from its  characterisation show that it is unlikely to increase the capacity of the host or vector to cause harm;</p>
                     <p align="left">(b) must not code for a toxin with an LD50 of less than 100 g/kg; and</p>
                     <p align="left">(c) must not code for a toxin with an LD50 of 100 g/kg or more, if  the intention is to          express the toxin at high levels; and</p>
                     <p align="left">(d) must not be uncharacterised nucleic acid from a toxin-producing organism; and</p>
                     <p align="left">(e) must not include a viral sequence, unless the donor nucleic acid:</p>
                      <p align="left"><p align="left">(i) is missing at least 1 gene essential for viral multiplication that:</p>
              <p align="left">(A) is not available in the cell into which the nucleic acid is introduced; and</p>
              </p>
            </td>
          </tr>

          <tr>
            <td>
               {{ $edform4->five == "1" ? "Yes" : "No" }}         
            </td>
            <td>
              <p align="left">2)A dealing with a genetically modified Caenorhabditis elegans, unless:</p>
              <p align="left">(a) an advantage is conferred on the animal by the genetic modification or</p> 
              <p align="left">(b) as a result of the genetic modification, the animal is capable of secreting or producing an infectious agent.
              </p>
            </td>
          </tr>
        </tbody>
    @endforeach
      </table>
    </div>
  </div>
</div>
<br>
 

  
    </div>
  </div>
</div>
@stop