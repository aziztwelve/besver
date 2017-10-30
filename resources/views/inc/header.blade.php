@extends('index_hub')

<head>
  <meta charset="utf-8">
  <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
  <title></title>
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <!-- <link href="style.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ url('css/style_hub.css') }}">
  <script type="text/javascript" src="{{ url('js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" scr="{{ url('js/bootstrap.js') }}"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>






<!-- @section('header') -->
<div class="header">
    
  </div>

     @section('navbar')
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
  <!-- @show -->
  @endsection
