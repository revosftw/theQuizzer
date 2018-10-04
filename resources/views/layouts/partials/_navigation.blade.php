<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <!-- <img class="mb-4" src="{{asset('img/bootstrap-solid.png')}}" alt="" width="40" height="40"> -->
    <a class="navbar-brand mr-auto mr-lg-0" href="#">
        <img src="{{asset('img/bootstrap-solid.png')}}" width="30" height="30" class="d-inline-block align-top" style="margin-right: 1em; color: white;" alt="">{{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas-collapse" data-target="#navbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('/') }}">{{ __('Dashboard') }}</a>
            </li>
            <li class="nav-item {{ Request::is('users') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users') }}">{{ __('Users') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('labs') }}" id="labs" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ __('QuesLab') }}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown">
                    <a class="dropdown-item" href="{{ route('questions.index') }}">{{ __('Question Bank') }}</a>
                    <a class="dropdown-item" href="{{ route('topics.index') }}">{{ __('Categories') }}</a>
                    <!-- <a class="dropdown-item" href="{{ route('exams.index') }}">{{ __('Exam Bank') }}</a> -->
                </div>
            </li>
            <li class="nav-item {{ Request::is('reports') ? 'active' : '' }}">
                <!-- <a class="nav-link" href="{{ route('reports.index') }}">{{ __('Reports') }}</a> -->
            </li>
            <li class="nav-item {{ Request::is('settings') ? 'active' : '' }}">
                <!-- <a class="nav-link" href="{{ url('') }}">{{ __('Settings') }}</a> -->
            </li>
        </ul>
        <ul class="navbar-nav mr-right">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    @auth
                    {{ Auth::user()->name }} <span class="badge badge-pill bg align-text-bottom">27</span><span class="caret"></span>
                    @else
                    Guest <span class="badge badge-pill bg align-text-bottom">27</span><span class="caret"></span>
                    @endauth
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('') }}">{{ __('Profile') }}</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> {{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                </div>
            </li>
        </ul>
    </div>
</nav>
