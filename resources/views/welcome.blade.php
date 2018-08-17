<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="icon" href="../../../../favicon.ico"> -->
  <!-- <link rel="icon" href="{{ asset('./favicon.ico') }}"> -->

  <title>Signin Template for Quizzer</title>

  <!-- Bootstrap core CSS -->
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <style type="text/css">
    html,
    body {
      height: 100%;
    }

    body {
      display: -ms-flexbox;
      display: flex;
      -ms-flex-align: center;
      align-items: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
    }

    .form-signin {
      width: 100%;
      max-width: 330px;
      padding: 15px;
      margin: auto;
    }
    .form-signin .checkbox {
      font-weight: 400;
    }
    .form-signin .form-control {
      position: relative;
      box-sizing: border-box;
      height: auto;
      padding: 10px;
      font-size: 16px;
    }
    .form-signin .form-control:focus {
      z-index: 2;
    }
    .form-signin input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body class="text-center">
  <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
    @csrf

    <img class="mb-4" src="{{asset('img/bootstrap-solid.png')}}" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">{{ __('Login') }}</h1>

    <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    @if ($errors->has('email'))
    <span class="invalid-feedback alert alert-danger" role="alert">
      <strong>{{ $errors->first('email') }}</strong>
    </span>
    @endif


    <label for="password" class="sr-only">{{ __('Password') }}</label>
    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    @if ($errors->has('password'))
    <span class="invalid-feedback alert alert-danger" role="alert">
      <strong>{{ $errors->first('password') }}</strong>
    </span>
    @endif

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
      </label>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
    <a class="btn btn-link" href="{{ route('password.request') }}">
      {{ __('Forgot Your Password?') }}
    </a>

    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>
</body>
</html>