@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                                Para continuar debe realizar la actualización de sus datos.
        
                    <div class="float-right">
                        <a href="{{ ('actualizacion') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                             {{ __('Actualizar datos') }}
                        </a>
                    </div>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
