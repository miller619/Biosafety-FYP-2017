@extends('layouts.app')
@section('title',  '| Clearance')
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

   @include('includes._messages')
		<div class="well">
			{!! Form::open(['url' => '/home/edcontent/EDFormB4/Submit', 'class' => 'form-horizontal']) !!}
        {{ csrf_field() }}
        <fieldset>
          <legend>4. Exemption Category</legend>
          <div class="row">
              <div class="col-xs-12">
                  {!! Form::label('ed_form_id', '1.Clearence ID:', ['class' => 'form-label']) !!}
                  {!! Form::text('ed_form_id', "$id", ['id'=>'ed_form_id', 'class' => 'form-control' ])!!}
              </div>   
          </div>
          <div class="row">
              <div class="col-xs-12">
              <table  class="table-responsive table-bordered" >
                  <thead>
                      <tr>
                          <th style="width: 50px;">4</th>
                          <th>Exemption Category</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>{!! Form::checkbox('one', '1') !!}</td>
                          <td>
                            <p align="left">2)<br>A dealing with a genetically modified Caenorhabditis elegans, unless:</p>
                            <p align="left">(a) an advantage is conferred on the animal by the genetic modification or</p> 
                            <p align="left">(b) as a result of the genetic modification, the animal is capable of secret  ing or producing an infectious agent.
                            </p>
                          </td>
                      </tr>
                      <tr>
                          <td>{!! Form::checkbox('two', '1') !!}</td>
                          <td>
                            <p align="left">3)<br>  A dealing with an animal into which genetically modified somatic cells have been introduced, if:</p>
                            <p align="left">(a) the somatic cells are not capable of giving rise to infectious agents as a result of the genetic modification; and</p> 
                            <p align="left">(b) the animal is not infected with a virus that is capable of recombining with the genetically modified nucleic acid in the somatic cells.
                            </p>
                          </td>
                      </tr>
                      <tr>
                          <td>{!! Form::checkbox('three', '1') !!}</td>
                          <td>
                            <p align="left">3A)<br> A dealing with an animal whose somatic cells have been genetically modified in vivo by a   replication defective viral vector, if:</p>
                            <p align="left">(a) the in vivo modification occurred as part of a previous dealing; and</p>
                            <p align="left">(b) the replication defective viral vector is no longer in the animal; and</p>
                            <p align="left">(c) no germ line cells have been genetically modified; and</p>
                            <p align="left">(d) the somatic cells cannot give rise to infectious agents as a result of the genetic       modification; and</p>
                            <p align="left">(e) the animal is not infected with a virus that can recombine with the genetically modified nucleic acid in the somatic cells of the animal.</p>
                          </td>
                      </tr>
                      <tr>
                          <td>{!! Form::checkbox('four', '1') !!}</td>
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
                          <td>{!! Form::checkbox('five', '1') !!}</td>
                          <td>
                            <p align="left">5)A dealing with a genetically modified Caenorhabditis elegans, unless:</p>
                            <p align="left">(a) an advantage is conferred on the animal by the genetic modification or</p> 
                            <p align="left">(b) as a result of the genetic modification, the animal is capable of secreting or producing an infectious agent.
                            </p>
                          </td>
                      </tr>
                  </tbody>
              </table>
              </div>
          </div>
        </fieldset>
                        
      
		  <div class="row">
        <div class="form-group">
            <div class="col-md-6 col-md-offset-6">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info btn-block'] ) !!}
            </div>
        </div>
    </div>
        
	{{ Form::close() }} 
    </div>
    </div>
    </div>
    </div>
    @endsection