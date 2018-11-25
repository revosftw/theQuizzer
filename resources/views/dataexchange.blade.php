@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Exchange</h1>
</div>

<form>
  <div class="form-group row">
    <div class="col-sm-8 justify-content-center">
      <label for="userFile" class="col-sm-3 col-md-3 col-form-label">Upload Users</label>
      <div class="custom-file col-sm-5 col-md-5 col-form-label" >
        <input type="file" class="custom-file-input" id="userFile">
        <label class="custom-file-label" for="userFile">Choose file</label>
      </div>
    </div>
  </div>
</form>

<form>
  <div class="form-group row">
    <div class="col-sm-8 justify-content-center">
      <label for="questionFile" class="col-sm-3 col-md-3 col-form-label">Upload Questions</label>
      <div class="custom-file col-sm-5 col-md-5 col-form-label" >
        <input type="file" class="custom-file-input" id="questionFile">
        <label class="custom-file-label" for="questionFile">Choose file</label>
      </div>
    </div>
  </div>
</form>

<form>
  <div class="form-group row">
    <div class="col-sm-8 justify-content-center">
      <label for="categoryFile" class="col-sm-3 col-md-3 col-form-label">Upload Categories</label>
      <div class="custom-file col-sm-5 col-md-5 col-form-label" >
        <input type="file" class="custom-file-input" id="categoryFile">
        <label class="custom-file-label" for="categoryFile">Choose file</label>
      </div>
    </div>
  </div>
</form>
@endsection
