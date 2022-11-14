@extends('layouts.app')

@section('template_title')
    Update Tarifa Bloque
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Tarifa Bloque</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tarifabloque.update', $tarifaBloque->TarifaBloqueId) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tarifa-bloque.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
