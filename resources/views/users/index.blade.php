@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Users</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('register') }}" data-toggle="tooltip" data-placement="top" title="add a new user"> <i class="fas fa-plus-circle"></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="" data-toggle="tooltip" data-placement="top" title="toggle activation status" > <i class="fas fa-exclamation-circle"></i> </a>
			<a class="btn btn-sm btn-outline-secondary" href="" data-toggle="tooltip" data-placement="top" title="activate selected users"> <i class="fas fa-power-off"></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="" data-toggle="tooltip" data-placement="top" title="reset password automatically"> <i class="fab fa-keycdn"></i> </a>
    </div>
  </div>
</div>
<div class="table-responsive mt-1">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input select-all" value="" type="checkbox"></label></div></th>
				<th>Name</th>
				<th>Email</th>
				<th>Status</th>
				<th>Role</th>
				<th class="text-center">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" id="{{ $user->id }}"></label></div></td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>@if($user->active) Enabled @else Disabled @endif</td>
				<td class="text-justify"> {{ $user->roles->first()->name or "" }} </td>
				<td class="text-center">
          <a class="" href="{{ route('users.toggle',$user->id) }}">@if($user->active)<i class="fas fa-check-circle text-success"></i>@else<i class="fas fa-times-circle text-danger"></i>@endif</a>
          <a class="" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-user-circle text-secondary"></i></a>
          <a class="" href="{{ route('users.reset',$user->id) }}"><i class="fas fa-redo text-secondary"></i></a>
        </td>
			</tr>
			@endforeach
		</tbody>
	</table>
  <div class="justify-content-center">
    {{ $users->links('layouts.partials._pagination') }}
  </div>
</div>
@endsection
