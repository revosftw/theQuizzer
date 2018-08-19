<!DOCTYPE html>
<!-- Header -->
<head>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

	<!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

	<!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>
