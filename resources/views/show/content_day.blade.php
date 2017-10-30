@extends('master')

@section('title', 'content')

<body>
	@section('content')
		<div class="content_day">
			<div class="content_day_info">
				<div class="filter">{!! $content_day->filter !!}</div>
				<div class="time"><p>{!! date('M d, Y  H:i', strtotime($content_day->time_create)) !!}</p></div>
			</div>
			<div class="content_day_content">
				<h2>{!! $content_day->content !!}</h2>
			</div>
			<div class="author">{!! $content_day->author !!}</div>
			<img class="content_day_image" src="{{ url('img/dev.jpg') }}">
			<div class="content_day_content_main">
				{!! $content_day->content_text !!}
			</div>
		</div>

	@endsection
</body>