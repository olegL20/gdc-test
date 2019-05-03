<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>GDC Invest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-xxl.css')}}">
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/otherPages.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&amp;subset=cyrillic"
          rel="stylesheet">
</head>
<body>

<header class="header">

    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-dark header-navbar">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/nav-brand.png')}}" alt="" class="nav-brand-img">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
                    aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link @if (request()->route()->getName() === 'home') active-link @endif" href="/">ГЛАВНАЯ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'about') active-link @endif" href="{{route('about')}}">О НАС</a></li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'faq') active-link @endif" href="{{route('faq')}}">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'partners') active-link @endif" href="{{route('partners')}}">ПАРТНЕРАМ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'news') active-link @endif" href="{{route('news')}}">НОВОСТИ</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link @if (request()->route()->getName() === 'news') active-link @endif" href="{{route('news')}}">НОВОСТИ</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link @if (request()->route()->getName() === 'reviews') active-link @endif" href="{{route('reviews')}}">ОТЗЫВЫ</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'reviews') active-link @endif" href="{{route('reviews')}}">ОТЗЫВЫ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (
                        request()->route()->getName() === 'docs' ||
                        request()->route()->getName() === 'docsII' ||
                        request()->route()->getName() === 'docsCCCL' ||
                        request()->route()->getName() === 'docsCPI' ||
                        request()->route()->getName() === 'docsGBSRO')

                        ) active-link @endif" href="{{route('docs')}}">ДОКУМЕНТАЦИЯ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'contacts') active-link @endif" href="{{route('contacts')}}">КОНТАКТЫ</a>
                    </li>
                    @if (!auth()->guest())
                        <li class="nav-item">
                            <a class="nav-link @if (request()->route()->getName() === 'cabinet') active-link @endif" href="{{route('cabinet')}}">ЛИЧНЫЙ КАБИНЕТ</a>
                        </li>
                        @if(auth()->user() && auth()->user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link @if (request()->route()->getName() === 'admin') active-link @endif" href="{{route('admin')}}">Админ Панель</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">Выйти</a>
                        </li>
                    @endif
                </ul>

                <select name="" id="" class="change-language">
                    <option value="ru">Русский</option>
                    <option value="en">Английский</option>
                </select>


            </div>
        </nav>

    </div>
</header>


