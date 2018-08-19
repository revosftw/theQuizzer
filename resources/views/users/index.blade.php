@extends('layouts.master')
@section('content')
<div class="mt-1">
	<h2>Users</h2>
	<span>
		<a href="/user/adduser"><button type="button" class="mx-1 btn btn-primary"><i class="fas fa-plus-square mx-1"> New User</i></button></a>
		<a href="/user/toggleStatus"><button type="button" class="mx-1 btn btn-primary"><i class="fas fa-sync-alt mx-1"> Toggle Status</i></button></a>
		<a href="/user/toggleStatus?active"><button type="button" class="mx-1 btn btn-primary"><i class="fas fa-unlock mx-1"> Set Active</i></button></a>
		<a href="/user/resetPasswords"><button type="button" class="mx-1 btn btn-primary"><i class="fas fa-key mx-1"> Reset Passwords</i></button></a>
	</span>
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