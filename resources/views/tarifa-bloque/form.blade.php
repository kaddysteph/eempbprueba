<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('TarifaBloqueNombre', $tarifaBloque->TarifaBloqueNombre, ['class' => 'form-control' . ($errors->has('TarifaBloqueNombre') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueNombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('TarifaBloqueCodigo', $tarifaBloque->TarifaBloqueCodigo, ['class' => 'form-control' . ($errors->has('TarifaBloqueCodigo') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueCodigo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condicion') }}
            {{ Form::text('TarifaBloqueCondicion', $tarifaBloque->TarifaBloqueCondicion, ['class' => 'form-control' . ($errors->has('TarifaBloqueCondicion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueCondicion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observacion') }}
            {{ Form::text('TarifaBloqueObservacion', $tarifaBloque->TarifaBloqueObservacion, ['class' => 'form-control' . ($errors->has('TarifaBloqueObservacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueObservacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kwh Inicial') }}
            {{ Form::text('TarifaBloqueKwhInicial', $tarifaBloque->TarifaBloqueKwhInicial, ['class' => 'form-control' . ($errors->has('TarifaBloqueKwhInicial') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueKwhInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Kwh Final') }}
            {{ Form::text('TarifaBloqueKwhFinal', $tarifaBloque->TarifaBloqueKwhFinal, ['class' => 'form-control' . ($errors->has('TarifaBloqueKwhFinal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueKwhFinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Demanda Inicial') }}
            {{ Form::text('TarifaBloqueDemandaInicial', $tarifaBloque->TarifaBloqueDemandaInicial, ['class' => 'form-control' . ($errors->has('TarifaBloqueDemandaInicial') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueDemandaInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Participacion Punta') }}
            {{ Form::text('TarifaBloqueParticipacionPunta', $tarifaBloque->TarifaBloqueParticipacionPunta, ['class' => 'form-control' . ($errors->has('TarifaBloqueParticipacionPunta') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloqueParticipacionPunta', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>