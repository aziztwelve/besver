@extends('master')

@section('title', 'content')

<body>
	@section('content')
		<div class="content_day_main">
			<div class="content_day_sidebar">
				<div>
					<div class="item-material" style="min-height: 376px;">
		  				<a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
		    				<img src="{{ url('img/dev.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
		  				</a>
		  				<div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
		  			</div>
				</div>

				<div>
					<div class="item-material" style="min-height: 376px;">
		  				<a class="ahref" href="/forbeslife/352437-dlya-kogo-roman-abramovich-kupil-chetvertyy-dom-v-nyu-yorke-za-18-mln">
		    				<img src="{{ url('img/dev.jpg') }}" width="520" height="400" alt="Steven Wang Architects">    <span class="name-material"><span class="field-content">Для кого Роман Абрамович купил четвертый дом в Нью-Йорке за $18 млн </span></span>
		  				</a>
		  				<div class="author-material"><a class="ahref-author" href="/profile/347403-darya-gordeeva">Дарья Гордеева</a>, Forbes Contributor</div>
		  			</div>
				</div>
			</div>
			
			<div class="content_day">
				<div class="content_day_info">
					<div class="filter">{!! $content_day->filter !!}</div>
					<div class="time"><p>{!! date('M d, Y  H:i', strtotime($content_day->time_create)) !!}</p></div>
				</div>
				<div class="content_day_content">
					<h2>{!! $content_day->content !!}</h2>
				</div>
				<div class="author">{!! $content_day->author !!}</div>
				<!-- <img class="content_day_image" src="{{ url('img/dev.jpg') }}"> -->
				<div class="content_day_content_main">
					{!! $content_day->content_text !!}
				</div>
			</div>
		</div>
	@endsection
</body>