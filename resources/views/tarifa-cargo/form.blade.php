<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Resolucion') }}
            {{ Form::select('TarifaResolucion_TarifaResolucionId', $resolucion, $tarifaCargo->TarifaResolucion_TarifaResolucionId, ['class' => 'form-control' . ($errors->has('TarifaResolucion_TarifaResolucionId') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaResolucion_TarifaResolucionId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Bloque') }}
            {{ Form::select('TarifaBloque_TarifaBloqueId', $bloque, $tarifaCargo->TarifaBloque_TarifaBloqueId, ['class' => 'form-control' . ($errors->has('TarifaBloque_TarifaBloqueId') ? ' is-invalid' : '')]) }}
            {!! $errors->first('TarifaBloque_TarifaBloqueId', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo por Consumidor') }}
            {{ Form::text('CargoxConsumidor', $tarifaCargo->CargoxConsumidor, ['class' => 'form-control' . ($errors->has('CargoxConsumidor') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoxConsumidor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo por Energia') }}
            {{ Form::text('CargoxEnergia', $tarifaCargo->CargoxEnergia, ['class' => 'form-control' . ($errors->has('CargoxEnergia') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoxEnergia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo Unitario por Potencia Maxima') }}
            {{ Form::text('CargoUnitarioxPotenciaMaxima', $tarifaCargo->CargoUnitarioxPotenciaMaxima, ['class' => 'form-control' . ($errors->has('CargoUnitarioxPotenciaMaxima') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoUnitarioxPotenciaMaxima', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo Unitario por Potencia Contratada') }}
            {{ Form::text('CargoUnitarioxPotenciaContratada', $tarifaCargo->CargoUnitarioxPotenciaContratada, ['class' => 'form-control' . ($errors->has('CargoUnitarioxPotenciaContratada') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoUnitarioxPotenciaContratada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo Unitario por Energia en Punta') }}
            {{ Form::text('CargoUnitarioxEnergiaenPunta', $tarifaCargo->CargoUnitarioxEnergiaenPunta, ['class' => 'form-control' . ($errors->has('CargoUnitarioxEnergiaenPunta') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoUnitarioxEnergiaenPunta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cargo Unitario por Energia Intermedia') }}
            {{ Form::text('CargoUnitarioxEnergiaIntermedia', $tarifaCargo->CargoUnitarioxEnergiaIntermedia, ['class' => 'form-control' . ($errors->has('CargoUnitarioxEnergiaIntermedia') ? ' is-invalid' : '')]) }}
            {!! $errors->first('CargoUnitarioxEnergiaIntermedia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>