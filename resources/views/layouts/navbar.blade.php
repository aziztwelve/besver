<!DOCTYPE html>
<html>
<head>
	<title>
		<title>@yield('title')</title>

	    <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">   
        <link rel="stylesheet" type="text/css" href="{{ url('css/style_main.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/style_hub.css') }}">
        <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
        <script type="text/javascript" scr="{{ url('js/bootstrap.js') }}"></script>
	</title>
</head>



<body>

<div class="header">
</div>


<div class="navbar_hub">
        
        
                <ul>
                    <li><a href="{{ url('/home1') }} ">Новости</a></li>
                    <li><a href="">Популярное</a></li>
                    <li><a href="">Стартапы</a></li>
                    <li><a href="">Кейсы</a></li>
                    <li><a href="">Мнения</a></li>
                    <li><a href="">Свой бизнес</a></li>
                    <li><a href="">Маркетинг</a></li>
                    <li><a href="">Развлечения</a></li>
                    <li><a href="">Путешествия</a></li>
                    <li><a href="">Наука</a></li>
                    <li><a href="">Спорт</a></li>
                    <li><a href="">Авто</a></li>
                    <li><a href="">Игры</a></li>
                    <li><a href="">Bitcoin</a></li>
                    
        
                </ul>
                
        </div>

</body>
</html>