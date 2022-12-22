@extends('layouts.app')

@section('template_title')
    Update User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

             @if (session('info'))
                <div class="alert alert-sucess">
                    <strong>{{session('info')}}</strong>
                </div>
             @endif 

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar</span>
                    </div>
                    <div class="card-body">
                    <div class="form-group">
                        {{ Form::label('name') }}
                        {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
                        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email') }}
                        {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electrónico']) }}
                        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
                    </div>
                    <div class="card-body">
                        <h2 class="h5">Listado de roles</h2>
                            {!! Form::model($user, ['route'=>['users.update', $user], 'method' => 'put']) !!}
                                @foreach($roles as $role)
                                    <div>
                                        <label>
                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                            {{$role->name}}
                                        </label>
                                    </div>
                                @endforeach
                                {!! Form::submit('Asignar rol', ['class' => 'btn btn-primary mt-2']) !!}
                            {!! Form::close() !!}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
