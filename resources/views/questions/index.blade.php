@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Questions</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('questions.create') }}" data-toggle="tooltip" data-placement="top" title="add a new question" > <i class="fas fa-plus-circle"></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('questions.create') }}" data-toggle="tooltip" data-placement="top" title="toggle mock status" > <i class="fas fa-exclamation-circle"></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('questions.create') }}" data-toggle="tooltip" data-placement="top" title="upload data" > <i class="fas fa-chevron-circle-up"></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('questions.create') }}" data-toggle="tooltip" data-placement="top" title="download data" > <i class="fas fa-chevron-circle-down"></i> </a>
      </div>
  </div>
</div>
<div class="table-responsive mt-1">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox"></label></div></th>
				<th class="text-center">ID</th>
				<th class="text-justify">Question</th>
				<th class="text-center">Mock</th>
				<th class="text-center">Topic</th>
				<th class="text-center" >Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($questions as $question)
			<tr>
				<td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" id="{{ $question->id }}"></label></div></td>
        <td class="text-center">{{ $question->id }}</td>
        <td class="text-justify">{{ $question->question_text }}</td>
				<td class="text-center">@if($question->for_mock) Enabled @else Disabled @endif</td>
        <td class="text-center">{{ $question->topic->name or ""}}</td>
				<td class="text-center">
          <a class="" href="{{ route('questions.edit', $question) }}"><i class="fab fa-creative-commons-nd text-secondary"></a></i>
          <!-- <a class="" href="{{ route('questions.toggle', $question) }}"><i class="fas fa-sync-alt"></a></i> -->
          <a class="" href="{{ route('questions.destroy', $question) }}" onClick="event.preventDefault();document.getElementById('questions.destroy.{{ $question }}').submit();"><i class="fas fa-times-circle text-secondary"></a></i>
          <form id="questions.destroy.{{ $question }}" class="d-none" action="{{ route('questions.destroy', $question) }}" method="post"> @csrf @method('DELETE') </form>
        </td>
			</tr>
			@endforeach
		</tbody>
    {{ $questions->links() }}
	</table>
</div>
@endsection
