<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Nombres') }}
            {{ Form::text('UsrUsuarioNombres', $usrUsuario->UsrUsuarioNombres, ['class' => 'form-control' . ($errors->has('UsrUsuarioNombres') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioNombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Apellidos') }}
            {{ Form::text('UsrUsuarioApellidos', $usrUsuario->UsrUsuarioApellidos, ['class' => 'form-control' . ($errors->has('UsrUsuarioApellidos') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioApellidos', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('UsrUsuarioDireccion', $usrUsuario->UsrUsuarioDireccion, ['class' => 'form-control' . ($errors->has('UsrUsuarioDireccion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioDireccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Documento de Identificacion') }}
            {{ Form::select('UsrUsuarioDocumentoId_UsrDoctoIdentificacionId', $documento, $usrUsuario->UsrUsuarioDocumentoId_UsrDoctoIdentificacionId, ['class' => 'form-control' . ($errors->has('UsrUsuarioDocumentoId_UsrDoctoIdentificacionId') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioDocumentoId_UsrDoctoIdentificacionId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Numero Identificacion') }}
            {{ Form::text('UsrUsuarioNumeroIdentificacion', $usrUsuario->UsrUsuarioNumeroIdentificacion, ['class' => 'form-control' . ($errors->has('UsrUsuarioNumeroIdentificacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioNumeroIdentificacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NIT') }}
            {{ Form::text('UsrUsuarioNIT', $usrUsuario->UsrUsuarioNIT, ['class' => 'form-control' . ($errors->has('UsrUsuarioNIT') ? ' is-invalid' : '')]) }}
            {!! $errors->first('UsrUsuarioNIT', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>