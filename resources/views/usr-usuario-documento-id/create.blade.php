@extends('layouts.app')

@section('template_title')
    Create Usr Usuario Documento Id
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Usr Usuario Documento Id</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('usr-usuario-documento-ids.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('usr-usuario-documento-id.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
