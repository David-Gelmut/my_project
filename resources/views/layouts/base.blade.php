<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="/styles/main.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a href="{{ route('index') }}"
           class="navbar-brand mr-auto ">Главная</a>
        <a href="{{ route('register') }}"
           class="nav-item nav-link ">Регистрация</a>
        <a href="{{ route('login') }}"
           class="nav-item nav-link">Вход</a>
        <a href="{{ route('home') }}"
           class="nav-item nav-link">Мои объявления</a>
        <form action="{{ route('logout') }}" method="POST"
              class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger"
                   value="Выход">
        </form>
    </nav>
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('main')
</div>
</body>
</html>
