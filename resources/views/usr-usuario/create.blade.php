@extends('layouts.app')

@section('template_title')
    Actualizar Datos
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizacion de datos</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actualizacion.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usr-usuario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
