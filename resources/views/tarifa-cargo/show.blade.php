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
                            <strong>Tarifaresolucion Tarifaresolucionid:</strong>
                            {{ $tarifaCargo->TarifaResolucion_TarifaResolucionId }}
                        </div>
                        <div class="form-group">
                            <strong>Tarifabloque Tarifabloqueid:</strong>
                            {{ $tarifaCargo->TarifaBloque_TarifaBloqueId }}
                        </div>
                        <div class="form-group">
                            <strong>Cargoxconsumidor:</strong>
                            {{ $tarifaCargo->CargoxConsumidor }}
                        </div>
                        <div class="form-group">
                            <strong>Cargoxenergia:</strong>
                            {{ $tarifaCargo->CargoxEnergia }}
                        </div>
                        <div class="form-group">
                            <strong>Cargounitarioxpotenciamaxima:</strong>
                            {{ $tarifaCargo->CargoUnitarioxPotenciaMaxima }}
                        </div>
                        <div class="form-group">
                            <strong>Cargounitarioxpotenciacontratada:</strong>
                            {{ $tarifaCargo->CargoUnitarioxPotenciaContratada }}
                        </div>
                        <div class="form-group">
                            <strong>Cargounitarioxenergiaenpunta:</strong>
                            {{ $tarifaCargo->CargoUnitarioxEnergiaenPunta }}
                        </div>
                        <div class="form-group">
                            <strong>Cargounitarioxenergiaintermedia:</strong>
                            {{ $tarifaCargo->CargoUnitarioxEnergiaIntermedia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
