@extends('layouts.master')

@section('content')
<div class="mt-2 mr-auto">
    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $topic->name }}" required autofocus disabled>

        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

        <div class="col-md-6">
            <input id="description" type="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" value="{{ $topic->description }}" disabled>
        </div>
    </div>
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-6">
            <a href="{{ route('topics') }}" class="btn btn-primary">back</a>
      </div>
  </div>
</div>
@endsection