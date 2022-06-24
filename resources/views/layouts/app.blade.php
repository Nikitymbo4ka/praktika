<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">

    @stack('style')
    <title>Document</title>
    <script src="https://kit.fontawesome.com/628c8d2499.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="menu">
    <div class="logom">
        <img style="height: 50px;" src="image/Logo.png" alt="">
    </div>
    <a class="menu-o" href="{{route('home')}}">Главная</a>


    <div class="dropdown">
        <a class="menu-o" href="{{ route('siteME') }}">Контакты</a>
    </div>
    <a class="menu-o" href="{{ route('siteKto') }}">Новости</a>
    @auth()
    <a class="menu-o" href="{{route("posts.create")}}">Добавить новость</a>
    @endauth

@guest()
        <a class="menu-o" href="{{route("register.create")}}">Авторизация/Регистрация</a>
    @endguest
    @auth()
        <a href="{{ route('logout') }}" class="menu-o @if(Request::is('logout')) active-a @endif"> ВЫХОД ("{{ auth()->user()->name }}")</a>
    @endauth
</div>

<div class="content">
    <div class="content-news">
    @yield('content')
    </div>
</div>

<script src="{{ asset('js/welcome.js') }}"></script>
</body>
</html>
