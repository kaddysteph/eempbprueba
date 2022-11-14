<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('TarifaResolucionDescripcion', $tarifaResolucion->TarifaResolucionDescripcion, ['class' => 'form-control' . ($errors->has('TarifaResolucionDescripcion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucionDescripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Inicial') }}
            {{ Form::date('TarifaResolucionFechaInicial', $tarifaResolucion->TarifaResolucionFechaInicial, ['class' => 'form-control' . ($errors->has('TarifaResolucionFechaInicial') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucionFechaInicial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha Final') }}
            {{ Form::date('TarifaResolucionFechaFinal', $tarifaResolucion->TarifaResolucionFechaFinal, ['class' => 'form-control' . ($errors->has('TarifaResolucionFechaFinal') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucionFechaFinal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('TarifaResolucionEstado', $tarifaResolucion->TarifaResolucionEstado, ['class' => 'form-control' . ($errors->has('TarifaResolucionEstado') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucionEstado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Observacion') }}
            {{ Form::text('TarifaResolucionObservacion', $tarifaResolucion->TarifaResolucionObservacion, ['class' => 'form-control' . ($errors->has('TarifaResolucionObservacion') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucionObservacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>