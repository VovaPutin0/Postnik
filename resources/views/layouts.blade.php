<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adapt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
    <title>@yield('name')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body class="bgbody">
<nav class="navbar bg-black" data-bs-theme="dark">
    <div class="container-fluid container">
        <a class="navbar-brand" href="{{ route('postnik.index') }}">Главная страница</a>
        <a class="navbar-brand" href="#vniz">Программы тренировок</a>
        <a class="navbar-brand" href="#food">План питания</a>
        <a class="navbar-brand" href="{{ route('postnik.food') }}">Рецепты</a>
        <a class="navbar-brand" href="{{ route('postnik.index') }}">Социальные сети</a>
    </div>
</nav>
@yield('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js"></script>
</body>
</html>
