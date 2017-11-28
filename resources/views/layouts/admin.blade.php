<!DOCTYPE html>
<html>


<head>
		<title>{{$title}}</title>
		<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">   
        <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
        <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
        <!-- <script type="text/javascript" src="{{ url('js/ckeditor/ckeditor.js') }}"></script> -->
        <script type="text/javascript" src="{{ url('js/ckeditor/ckeditor.js') }}"></script>
        <script type="text/javascript" scr="{{ url('js/bootstrap.js') }}"></script>
        <script type="text/javascript" src="/AjexFileManager/ajex.js"></script>



        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>  




        <script>
 			var options = {
    		filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    		filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    		filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    		filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
 		 };
		</script>
</head>




<body>
<header id="header_wrapper">
@yield('header')

 @if(count($errors)>0)
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>
			@endforeach
		</ul>
	</div>
@endif

@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
@endif
</header>

@yield('content')
</body>
</html>	