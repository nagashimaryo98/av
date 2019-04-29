<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{$title}}</title>
    <meta name="description" content="{{$description}}">

    @if(Request::query() && Request::query()['page'])
    	<meta name="robots" content="noindex, nofollow">
    @endif

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<link href='https://fonts.googleapis.com/css?family=Lato:400,400italic' rel='stylesheet' type='text/css'>

	<link href="{{ asset('css/sanitize.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
