<!DOCTYPE html>
<html>


<head>
	<title>@yield('title')</title>

	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">   
        <link rel="stylesheet" type="text/css" href="{{ url('css/style_main.css') }}">
        <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" scr="{{ url('js/bootstrap.js') }}"></script>
</head>




<body>
@include('layouts.navbar')

@yield('content')


@include('layouts.footer')
</body>
</html>