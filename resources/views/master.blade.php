<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>

	<link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.css') !!}">
	@yield('style')

	<script type="text/javascript" src="{!! asset('bootstrap/js/jquery.js') !!}"></script>
	<script type="text/javascript" src="{!! asset('bootstrap/js/bootstrap.js') !!}"></script>
</head>
<body>
@include('shared.navbar')
@yield('content')
@yield('js')
</body>
</html>