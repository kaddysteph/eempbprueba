@extends('layouts.app')

@section('template_title')
    {{ $usrUsuarioTelefono->name ?? 'Show Usr Usuario Telefono' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usr Usuario Telefono</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usr-usuario-telefonos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Usrusuariotelefonoid:</strong>
                            {{ $usrUsuarioTelefono->UsrUsuarioTelefonoId }}
                        </div>
                        <div class="form-group">
                            <strong>Usrusuariotelefono:</strong>
                            {{ $usrUsuarioTelefono->UsrUsuarioTelefono }}
                        </div>
                        <div class="form-group">
                            <strong>Create At:</strong>
                            {{ $usrUsuarioTelefono->create_at }}
                        </div>
                        <div class="form-group">
                            <strong>Update At:</strong>
                            {{ $usrUsuarioTelefono->update_at }}
                        </div>
                        <div class="form-group">
                            <strong>Usrusuario Usrusuarioideem:</strong>
                            {{ $usrUsuarioTelefono->UsrUsuario_UsrUsuarioIdeem }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
