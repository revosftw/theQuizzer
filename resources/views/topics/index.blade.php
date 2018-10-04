@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Categories</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('topics.create') }}" data-toggle="tooltip" data-placement="top" title="add a new category" > <i class="fas fa-plus" ></i> </a>
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('topics.create') }}" data-toggle="tooltip" data-placement="top" title="data exchange" > <i class="fas fa-exchange-alt" ></i> </a>
    </div>
  </div>
</div>
<div class="table-responsive mt-1">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>
          <div class="form-check form-check-inline mr-auto">
            <input class="form-check-input position-static select-all" value="" type="checkbox">
          </div>
        </th>
        <th >Name</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($topics as $topic)
      <tr>
        <td><div class="form-check-inline mr-auto"><label class="form-check-label"><input class="form-check-input" value="" type="checkbox" name="{{ $topic->id }}"></label></div></td>
        <td>{{ $topic->name }}</td>
        <td>{{ $topic->description }}</td>
        <td>
          <form class="form-inline mb-0" action="{{ route('topics.destroy',$topic) }}" method="post">
            @csrf
            <a class="btn btn-primary mr-1" href="{{ route('topics.edit',$topic) }}"><i class="fas fa-pen"></i></a>
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
