@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Questions</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="add a new user" type="submit" onclick="location.href = '/register';"> <i class="fas fa-plus"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="toggle activation status" type="submit" onclick="location.href = '/user/toggleStatus';"> <i class="fas fa-sync-alt"></i> </button>
			<button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="activate selected users" type="submit" onclick="location.href = '/user/toggleStatus?active';"> <i class="fas fa-unlock"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" title="reset password automatically" type="submit" onclick="location.href = '/user/resetPasswords';"> <i class="fas fa-key"></i> </button>
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
				<th>Answer</th>
				<!-- <th>Role</th> -->
				<th>Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($questions as $question)
			<tr>
				<td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" id="{{ $user->id }}"></label></div></td>
        <td>{{ $question->id }}</td>
        <td>{{ $question->text }}</td>
				<td>{{ $question->answer }}</td>
				<td>@if($question->mock) Enabled @else Disabled @endif</td>
				<td>
          <a class="" href="/question/{{$question->id}}"><i class="fas fa-user-edit"></a></i>
          <a class="" href="/question/{{$question->id}}"><i class="fas fa-sync-alt"></a></i>
          <a class="" href="/question/{{$question->id}}"><i class="fas fa-unlock"></a></i>
          <a class="" href="/question/{{$question->id}}"><i class="fas fa-key"></a></i>
        </td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
