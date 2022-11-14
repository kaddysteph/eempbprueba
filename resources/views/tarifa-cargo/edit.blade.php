@extends('layouts.app')

@section('template_title')
    Update Tarifa Cargo
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tarifa Cargo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tarifacargos.update', $tarifaCargo->TarifaResolucion_TarifaResolucionId, $tarifaCargo->TarifaBloque_TarifaBloqueId) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tarifa-cargo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
