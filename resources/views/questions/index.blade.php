@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Questions</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="add a new question" type="submit" onclick="location.href='{{ route('questions.create') }}'"> <i class="fas fa-plus"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="toggle mock status" type="submit" onclick="#"> <i class="fas fa-sync-alt"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="data exchange" type="submit" onclick="#"> <i class="fas fa-exchange-alt"></i> </button>
      </div>
  </div>
</div>
<div class="table-responsive mt-1">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox"></label></div></th>
				<th>ID</th>
				<th>Question</th>
				<th>Mock</th>
				<th>Topic</th>
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($questions as $question)
			<tr>
				<td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" id="{{ $question->id }}"></label></div></td>
        <td>{{ $question->id }}</td>
        <td>{{ $question->question_text }}</td>
				<td>@if($question->for_mock) Enabled @else Disabled @endif</td>
        <td>{{ $question->topic->name or ""}}</td>
				<td>
          <a class="" href="{{ route('questions.edit',$question->id) }}"><i class="fas fa-edit"></a></i>
          <a class="" href="{{ route('questions.toggle',$question->id) }}"><i class="fas fa-sync-alt"></a></i>
          <a class="" href="{{ route('questions.destroy', $question) }}" onClick="event.preventDefault();document.getElementById('questions.destroy.{{ $question }}').submit();"><i class="fas fa-minus-circle text-secondary"></a></i>
          <form id="questions.destroy.{{ $question }}" class="d-none" action="{{ route('questions.destroy', $question) }}" method="post"> @csrf @method('DELETE') </form>
        </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
