<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email:</strong>
            {!! Form::textarea('email', null, array('placeholder' => 'Email','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Contact Number:</strong>
            {!! Form::textarea('userContact', null, array('placeholder' => 'userContact','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Designation:</strong>
            {!! Form::textarea('userDesignation', null, array('placeholder' => 'userDesignation','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Institution:</strong>
            {!! Form::textarea('userInstitution', null, array('placeholder' => 'userInstitution','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Faculty:</strong>
            {!! Form::textarea('userFaculty', null, array('placeholder' => 'userFaculty','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Address:</strong>
            {!! Form::textarea('userAddress', null, array('placeholder' => 'userAddress','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Fax Number:</strong>
            {!! Form::textarea('userFax', null, array('placeholder' => 'userFax','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Institution ID:</strong>
            {!! Form::textarea('userInstitutionID', null, array('placeholder' => 'userInstitutionID','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>