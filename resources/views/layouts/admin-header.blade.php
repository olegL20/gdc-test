<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-xxl.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <style>

        .header {
            min-height: auto;
            -webkit-box-shadow: 0 3px 12px rgba(0, 0, 0, 0.16);
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.16);
            background-color: #ffffff; }
        .header .header-navbar {
            padding: 0; }
        .header .header-navbar .navbar-brand {
            padding: 8px 0; }
        .header .header-navbar .nav-link, .header .header-navbar .logout {
            color: #0159a1;
            font-family: Montserrat;
            font-size: 18px;
            font-weight: 400;
            padding: 20px 10px; }
        .header .header-navbar .nav-link:hover, .header .header-navbar .logout:hover {
            color: #0159A1; }
    </style>
</head>
<body>

<header class="header">

    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light header-navbar">
            <a class="navbar-brand" href="/">
                <img src="img/admin-logo.png" alt="" class="nav-brand-img">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto  mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link " href="{{route('admin.users')}}">Пользователи </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Транзакции</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Новости</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Тарифы</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.lottery')}}">Лотерея</a>
                    </li>


                </ul>

                <a href="{{route('logout')}}" class="logout"><i class="fas fa-sign-out-alt"></i> <span>Выйти</span></a>


            </div>
        </nav>

    </div>
</header>
