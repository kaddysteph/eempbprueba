@extends('layouts.app')

@section('template_title')
    {{ $tarifaResolucion->name ?? 'Show Tarifa Resolucion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarifa Resolucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarifaresolucion.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tarifaResolucion->TarifaResolucionDescripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicial:</strong>
                            {{ $tarifaResolucion->TarifaResolucionFechaInicial }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Final:</strong>
                            {{ $tarifaResolucion->TarifaResolucionFechaFinal }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tarifaResolucion->TarifaResolucionEstado }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $tarifaResolucion->TarifaResolucionObservacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
