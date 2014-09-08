<!DOCTYPE html>
<html>
	<head>
		<title>Demo</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="description" content="Demo project">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/main.css')}}
	</head>
	<body>
		@include('include.homeheader')
		@yield('content')
	</body>
</html>