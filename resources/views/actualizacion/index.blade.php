@extends('layouts.app')

@section('content')


<div class="container">
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
            Para continuar debe realizar la actualización de sus datos.
        </div>
    </div>
    <div class="float-right">
        <a href="{{ ('actualizacion') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                {{ __('Actualizar datos') }}
        </a>
    </div>
</div>



@endsection