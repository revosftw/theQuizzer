@extends('layouts.master')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Dashboard</h1>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary">Share</button>
      <button class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <!-- <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button> -->
  </div>
</div>

<div class="container">
  <div class="card-deck mb-3 text-center">
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-users grey"></i> Users Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> 100 <small class="text-muted">active users</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>80 students</li>
          <li>15 teachers</li>
          <li>5 administrators</li>
          <li>113 total users</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Manage Users</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-flag-checkered grey"></i> Mock Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title"> 186 <small class="text-muted">mocks taken</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Last mock was on 15-08-2018</li>
          <li>Number of attendees</li>
          <li>Average of the last mock</li>
          <li>Upcoming mock is on 22-08-2018</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Manage Mocks</button>
      </div>
    </div>
    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-question-circle grey"></i> Question Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">1128 <small class="text-muted">questions</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>785 practice questions</li>
          <li>200 common pool questions</li>
          <li>114 exclusive mock questions</li>
          <li>13 questions added last week</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-primary">Manage Questions</button>
      </div>
    </div>
  </div>
  @endsection
