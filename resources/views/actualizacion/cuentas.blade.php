@extends('layouts.app')

@section('content')
        <div class="row mb-3">
            <label for="cuenta" class="col-md-4 col-form-label text-md-end">{{ __('Numero de Cuenta') }}</label>
                <div class="col-md-6">
                    <input id="cuenta" type="text" class="form-control @error('cuenta') is-invalid @enderror" name="cuenta" value="{{ old('cuenta') }}" required autocomplete="cuenta" autofocus>
                        @error('cuenta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                </div>
            </div>
@endsection