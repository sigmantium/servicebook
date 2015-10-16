<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ServiceBook</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/all.css') }}" rel="stylesheet">
	<script src="{{ asset('js/all.js') }}"></script>
	<script src="{{ asset('js/raphael-min.js') }}"></script>
	<script src="{{ asset('js/morris.min.js') }}"></script>
	<script src="{{ asset('js/typeahead.bundle.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap-timepicker.js') }}"></script>

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body style="padding-top:50px">
@include('partials.top')
@if (Auth::user())
	@include('partials.left')
@endif
@yield('breadcrumb')
@yield('error')
@include('flash::message')
@yield('content')

</body>
</html>
