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
  <!-- administrator dashboard -->
  <div class="card-deck mb-3 text-center">

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-users grey"></i> Users Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $countActiveUser }} <small class="text-muted">active users</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $countStudent }} students</li>
          <li>{{ $countTeacher }} teachers</li>
          <li>{{ $countAdministrator }} administrators</li>
          <li>{{ $countUsers }} total users</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('users.index')}}'">Manage Users</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-flag-checkered grey"></i> Mock Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $examsCount }} <small class="text-muted">mocks taken</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Last mock was on {{ $lastExamDate }}</li>
          <li>Attendance was {{ $lastExamAttendance }}</li>
          <li>Average of the last mock was {{ $lastExamAverage }}</li>
          <li>Upcoming mock is on {{ $nextExamDate }}</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Manage Mocks</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-question-circle grey"></i> Question Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title">{{ $questionsCount }} <small class="text-muted">questions</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $questionsCount }} practice questions</li>
          <li>{{ $practiceQuestionsCount}} common pool questions</li>
          <li>{{ $mockQuestionsCount }} exclusive mock questions</li>
          <li>{{ $recentQuestionsCount }} questions added last week</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('questions.index')}}'">Manage Questions</button>
      </div>
    </div>

  </div>
  <!-- teacher dashboard -->
  <div class="card-deck mb-3 text-center">

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-users grey"></i> Users Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $countActiveUser }} <small class="text-muted">active users</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $countStudent }} students</li>
          <li>{{ $countTeacher }} teachers</li>
          <li>{{ $countAdministrator }} administrators</li>
          <li>{{ $countUsers }} total users</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('users.index')}}'">Manage Users</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-flag-checkered grey"></i> Mock Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $examsCount }} <small class="text-muted">mocks taken</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Last mock was on {{ $lastExamDate }}</li>
          <li>Attendance was {{ $lastExamAttendance }}</li>
          <li>Average of the last mock was {{ $lastExamAverage }}</li>
          <li>Upcoming mock is on {{ $nextExamDate }}</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Manage Mocks</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-question-circle grey"></i> Question Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title">{{ $questionsCount }} <small class="text-muted">questions</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $questionsCount }} practice questions</li>
          <li>{{ $practiceQuestionsCount}} common pool questions</li>
          <li>{{ $mockQuestionsCount }} exclusive mock questions</li>
          <li>{{ $recentQuestionsCount }} questions added last week</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('questions.index')}}'">Manage Questions</button>
      </div>
    </div>

  </div>
  <!-- student dashboard -->
  <div class="card-deck mb-3 text-center">

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-users grey"></i> Users Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $countActiveUser }} <small class="text-muted">active users</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $countStudent }} students</li>
          <li>{{ $countTeacher }} teachers</li>
          <li>{{ $countAdministrator }} administrators</li>
          <li>{{ $countUsers }} total users</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('users.index')}}'">Manage Users</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-flag-checkered grey"></i> Mock Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"> {{ $examsCount }} <small class="text-muted">mocks taken</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>Last mock was on {{ $lastExamDate }}</li>
          <li>Attendance was {{ $lastExamAttendance }}</li>
          <li>Average of the last mock was {{ $lastExamAverage }}</li>
          <li>Upcoming mock is on {{ $nextExamDate }}</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary">Manage Mocks</button>
      </div>
    </div>

    <div class="card mb-4 box-shadow">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal"> <i class="fas fa-question-circle grey"></i> Question Summary</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title">{{ $questionsCount }} <small class="text-muted">questions</small></h1>
        <ul class="list-unstyled mt-3 mb-4">
          <li>{{ $questionsCount }} practice questions</li>
          <li>{{ $practiceQuestionsCount}} common pool questions</li>
          <li>{{ $mockQuestionsCount }} exclusive mock questions</li>
          <li>{{ $recentQuestionsCount }} questions added last week</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-outline-secondary" onclick="location.href='{{route('questions.index')}}'">Manage Questions</button>
      </div>
    </div>

  </div>
</div>
@endsection
