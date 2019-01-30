@extends('layouts.master')

@section('content')

<div class="form-group row">
    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('title') }}</label>

    <div class="col-md-6">
        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>

    <div class="col-md-6">
        <input id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ old('description') }}" required>

        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('url') }}</label>

    <div class="col-md-6">
        <input id="url" type="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" required>

        @if ($errors->has('url'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
        @endif
    </div>
</div>

@endsection