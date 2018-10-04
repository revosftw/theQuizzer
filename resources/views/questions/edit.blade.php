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
        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Question') }}</label>

        <div class="col-md-6">
          <textarea id="question_text" cols="50" rows="10" class="form-control{{ $errors->has('question_text') ? ' is-invalid' : '' }}" name="question_text" required autofocus>{{ $question->question_text }}</textarea>

          @if ($errors->has('question_text'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('question_text') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Topic') }}</label>

        <div class="col-md-6">
          <select class="custom-select form-control{{ $errors->has('topic') ? ' is-invalid' : '' }}" name="topic" required autofocus>
            @foreach($topics as $topic)
              <option value="{{ $topic->id }}" {{ (isset($question->topic->id))? ($topic->id) == ($question->topic->id)? 'selected' : '' : '' }}>{{ $topic->name }}</option>
            @endforeach
          </select>
          @if ($errors->has('question_text'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('topic') }}</strong>
          </span>
          @endif
        </div>
      </div>

      <div class="form-group row">
        <div class="offset-md-4 col-md-6">
          <label for="option" class="col-form-label text-md-left">{{ __('Options') }}</label>
          <div class="col-form-label btn-group btn-group-sm float-right" role="group" aria-label="options-action">
            <!-- <a class="btn btn-secondary" href=""#> <i class="fas fa-plus"></i> </a> -->
            <!-- <a class="btn btn-secondary" href="#"> <i class="fas fa-minus"></i> </a> -->
          </div>
        </div>
      </div>
      @php($items = 0)
      @foreach($question->options as $option)
      <div class="form-group row">
        <div class="offset-md-4 col-md-6">
          <input name="option[{{ $items }}][id]" hidden=true value="{{ $option->id }}">
          <input id="{{ $option->id }}" name="option[{{ $items }}][option_text]" type="text" class="form-control{{ $errors->has('option') ? ' is-invalid' : '' }}" value="{{ $option->option_text }}" required>

          @if ($errors->has('option'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('option') }}</strong>
          </span>
          @endif
        </div>

        <div class="form-check-inline">
          <label class="form-check-label"><input class="form-check-input" name="option[{{ $items }}][isAnswer]" type="checkbox"  {{ ($option->isAnswer) ? 'checked':'' }}></label>
        </div>

      </div>
      @php($items++)
      @endforeach

      <div class="form-group row">
        <label for="text" class="col-md-4 col-form-label text-md-right">{{ __('Explaination') }}</label>

        <div class="col-md-6">
          <textarea id="answer_explanation" cols="50" rows="10" class="form-control{{ $errors->has('answer_explanation') ? ' is-invalid' : '' }}" name="answer_explanation" autofocus>{{ $question->answer_explanation }}</textarea>

          @if ($errors->has('answer_explanation'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('answer_explanation') }}</strong>
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
