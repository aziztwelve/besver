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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="{{ route('home') }}">Главная</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                       <a class="nav-link" href="#">Популярное <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Стартапы</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Кейсы</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Развлечения</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Наука</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">Авто</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="#">English</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
</div>


{{-- <div class="navbar_hub">
        
        
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
 --}}
</body>
</html>