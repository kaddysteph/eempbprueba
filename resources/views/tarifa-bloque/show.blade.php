@extends('layouts.app')

@section('template_title')
    {{ $tarifaBloque->name ?? 'Show Tarifa Bloque' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarifa Bloque</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarifabloque.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>ID:</strong>
                            {{ $tarifaBloque->TarifaBloqueId }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tarifaBloque->TarifaBloqueNombre }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tarifaBloque->TarifaBloqueCodigo }}
                        </div>
                        <div class="form-group">
                            <strong>Condicion:</strong>
                            {{ $tarifaBloque->TarifaBloqueCondicion }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $tarifaBloque->TarifaBloqueObservacion }}
                        </div>
                        <div class="form-group">
                            <strong>Kwh Inicial:</strong>
                            {{ $tarifaBloque->TarifaBloqueKwhInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Kwh Final:</strong>
                            {{ $tarifaBloque->TarifaBloqueKwhFinal }}
                        </div>
                        <div class="form-group">
                            <strong>Demanda Inicial:</strong>
                            {{ $tarifaBloque->TarifaBloqueDemandaInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Participacion punta:</strong>
                            {{ $tarifaBloque->TarifaBloqueParticipacionPunta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
