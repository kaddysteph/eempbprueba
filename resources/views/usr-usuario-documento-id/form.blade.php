<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('UsrDoctoIdentificacionId') }}
            {{ Form::text('UsrDoctoIdentificacionId', $usrUsuarioDocumentoId->UsrDoctoIdentificacionId, ['class' => 'form-control' . ($errors->has('UsrDoctoIdentificacionId') ? ' is-invalid' : ''), 'placeholder' => 'Usrdoctoidentificacionid']) }}
            {!! $errors->first('UsrDoctoIdentificacionId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsrDoctoIdentificacion') }}
            {{ Form::text('UsrDoctoIdentificacion', $usrUsuarioDocumentoId->UsrDoctoIdentificacion, ['class' => 'form-control' . ($errors->has('UsrDoctoIdentificacion') ? ' is-invalid' : ''), 'placeholder' => 'Usrdoctoidentificacion']) }}
            {!! $errors->first('UsrDoctoIdentificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>