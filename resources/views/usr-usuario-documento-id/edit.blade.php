@extends('layouts.app')

@section('template_title')
    Update Usr Usuario Documento Id
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Usr Usuario Documento Id</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usr-usuario-documento-ids.update', $usrUsuarioDocumentoId->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('usr-usuario-documento-id.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
