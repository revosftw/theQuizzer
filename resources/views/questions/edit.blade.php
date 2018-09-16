@extends('layouts.master')

@section('content')
<div class="mt-2 mr-auto">
  @if(isset($question))
    <form method="POST" action="{{ route('questions.update', $question) }}" aria-label="{{ __('Update') }}">
    @method('PATCH')
  @else
    <form method="POST" action="{{ route('questions.create') }}" aria-label="{{ __('Create') }}">
  @endif
    @csrf

    <div class="form-group row">
        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Body') }}</label>

        <div class="col-md-6">
              <input id="text" type="text" class="form-control{{ $errors->has('text') ? ' is-invalid' : '' }}" name="text" value="{{ $question->text }}" required autofocus>

            @if ($errors->has('text'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('text') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="option" class="col-md-4 col-form-label text-md-right">{{ __('Options') }}</label>

        <div class="col-md-6">
            <input id="option" type="text" class="form-control{{ $errors->has('option') ? ' is-invalid' : '' }}" name="option" value="{{ $question->option }}" required>

            @if ($errors->has('option'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('option') }}</strong>
                </span>
            @endif
        </div>
    </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-6">
            <button type="submit" class="btn btn-primary">
                @if(isset($question))
                  {{ __('Update') }}
                @else
                  {{ __('Create') }}
                @endif
            </button>
        </div>
    </div>
</form>
</div>
@endsection
