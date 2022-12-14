@extends('layouts.app')

@section('template_title')
    Create Tarifa Cargo
@endsection

@section('content')
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Cargo</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tarifacargos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tarifa-cargo.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
