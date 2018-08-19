@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary" type="submit" onclick="location.href = '/register';"> <i class="fas fa-plus-square"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" type="submit" onclick="location.href = '/user/toggleStatus';"> <i class="fas fa-sync-alt"></i> </button>
			<button class="btn btn-sm btn-outline-secondary" type="submit" onclick="location.href = '/user/toggleStatus?active';"> <i class="fas fa-unlock"></i> </button>
      <button class="btn btn-sm btn-outline-secondary" type="submit" onclick="location.href = '/user/resetPasswords';"> <i class="fas fa-key"></i> </button>
    </div>
  </div>
</div>
<div class="table-responsive mt-1">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox"></label></div></th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Role</th>
				<th>Edit</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" id="{{ $user->id }}"></label></div></td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>@if($user->active) Enabled @else Disabled @endif</td>
				<td>{{ $user->roles->first()->name }}</td>
				<td><a href="/user/{{$user->id}}"><i class="fas fa-user-edit"></a></i></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection
