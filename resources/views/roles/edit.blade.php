@extends('layouts.app')

@section('template_title')
    Crear Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">


            @if(session('info'))
                <div class="alert alert">
                    {{session('info')}}
                </div>
                @endif



                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Rol</span>
                    </div>
                    <div class="card-body">
                        {!! Form::model($role, ['route'=>['roles.update', $role], 'method' => 'put']) !!}  
                            
                            @include('roles.form')

                            {!! Form::submit('Actualizar Rol', ['class' => 'btn btn-primary mt-2']) !!}
                        {!! Form::close() !!}
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection