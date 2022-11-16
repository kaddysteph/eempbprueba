@extends('layouts.app')

@section('template_title')
    {{ $tarifaCargo->name ?? 'Show Tarifa Cargo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarifa Cargo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarifacargos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Resolucion:</strong>
                            {{ $tarifaCargo->TarifaResolucion_TarifaResolucionId }}
                        </div>
                        <div class="form-group">
                            <strong>Bloque:</strong>
                            {{ $tarifaCargo->TarifaBloque_TarifaBloqueId }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo por consumidor:</strong>
                            {{ $tarifaCargo->CargoxConsumidor }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo por energia:</strong>
                            {{ $tarifaCargo->CargoxEnergia }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo unitario por potencia maxima:</strong>
                            {{ $tarifaCargo->CargoUnitarioxPotenciaMaxima }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo unitario por potencia contratada:</strong>
                            {{ $tarifaCargo->CargoUnitarioxPotenciaContratada }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo unitario por energia en punta:</strong>
                            {{ $tarifaCargo->CargoUnitarioxEnergiaenPunta }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo unitario por energia intermedia:</strong>
                            {{ $tarifaCargo->CargoUnitarioxEnergiaIntermedia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
