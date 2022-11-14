@extends('layouts.app')

@section('template_title')
    Create Tarifa Bloque
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Bloque</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tarifabloque.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tarifa-bloque.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
