<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('UsrUsuarioTelefonoId') }}
            {{ Form::text('UsrUsuarioTelefonoId', $usrUsuarioTelefono->UsrUsuarioTelefonoId, ['class' => 'form-control' . ($errors->has('UsrUsuarioTelefonoId') ? ' is-invalid' : ''), 'placeholder' => 'Usrusuariotelefonoid']) }}
            {!! $errors->first('UsrUsuarioTelefonoId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsrUsuarioTelefono') }}
            {{ Form::text('UsrUsuarioTelefono', $usrUsuarioTelefono->UsrUsuarioTelefono, ['class' => 'form-control' . ($errors->has('UsrUsuarioTelefono') ? ' is-invalid' : ''), 'placeholder' => 'Usrusuariotelefono']) }}
            {!! $errors->first('UsrUsuarioTelefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('create_at') }}
            {{ Form::text('create_at', $usrUsuarioTelefono->create_at, ['class' => 'form-control' . ($errors->has('create_at') ? ' is-invalid' : ''), 'placeholder' => 'Create At']) }}
            {!! $errors->first('create_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('update_at') }}
            {{ Form::text('update_at', $usrUsuarioTelefono->update_at, ['class' => 'form-control' . ($errors->has('update_at') ? ' is-invalid' : ''), 'placeholder' => 'Update At']) }}
            {!! $errors->first('update_at', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('UsrUsuario_UsrUsuarioIdeem') }}
            {{ Form::text('UsrUsuario_UsrUsuarioIdeem', $usrUsuarioTelefono->UsrUsuario_UsrUsuarioIdeem, ['class' => 'form-control' . ($errors->has('UsrUsuario_UsrUsuarioIdeem') ? ' is-invalid' : ''), 'placeholder' => 'Usrusuario Usrusuarioideem']) }}
            {!! $errors->first('UsrUsuario_UsrUsuarioIdeem', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>