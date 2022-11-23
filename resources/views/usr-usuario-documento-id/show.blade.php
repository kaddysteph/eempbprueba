@extends('layouts.app')

@section('template_title')
    {{ $usrUsuarioDocumentoId->name ?? 'Show Usr Usuario Documento Id' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usr Usuario Documento Id</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usr-usuario-documento-ids.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usrdoctoidentificacionid:</strong>
                            {{ $usrUsuarioDocumentoId->UsrDoctoIdentificacionId }}
                        </div>
                        <div class="form-group">
                            <strong>Usrdoctoidentificacion:</strong>
                            {{ $usrUsuarioDocumentoId->UsrDoctoIdentificacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
