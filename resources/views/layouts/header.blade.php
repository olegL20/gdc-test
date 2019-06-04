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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/otherPages.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:400,600,700&amp;subset=cyrillic"
        rel="stylesheet">

</head>
<body>

<header class="header">

    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-dark header-navbar">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/nav-brand.svg')}}" alt="" class="nav-brand-img">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu"
                aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainMenu">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link @if (request()->route()->getName() === 'home') active-link @endif"
                            href="/">{{__('menu.main')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'about') active-link @endif"
                            href="{{route('about')}}">{{__('menu.aboutUs')}}</a></li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'faq') active-link @endif"
                            href="{{route('faq')}}">{{__('menu.faq')}}</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link @if (request()->route()->getName() === 'news') active-link @endif" href="{{route('news')}}">НОВОСТИ</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link @if (request()->route()->getName() === 'news') active-link @endif" href="{{route('news')}}">НОВОСТИ</a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link @if (request()->route()->getName() === 'reviews') active-link @endif" href="{{route('reviews')}}">ОТЗЫВЫ</a>--}}
                    {{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link @if (
                        request()->route()->getName() === 'docs' ||
                        request()->route()->getName() === 'docsII' ||
                        request()->route()->getName() === 'docsCCCL' ||
                        request()->route()->getName() === 'docsCPI' ||
                        request()->route()->getName() === 'docsGBSRO')

                            ) active-link @endif" href="{{route('docs')}}">{{__('menu.docs')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->route()->getName() === 'contacts') active-link @endif"
                            href="{{route('contacts')}}">{{__('menu.contacts')}}</a>
                    </li>
                    @if (!auth()->guest())
                        <li class="nav-item">
                            <a class="nav-link @if (request()->route()->getName() === 'cabinet') active-link @endif"
                                href="{{route('cabinet')}}">{{__('menu.cabinet')}}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('logout')}}">{{__('menu.logout')}}</a>
                        </li>
                    @endif
                </ul>
                <ul>
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a style="display: inline-flex; margin-top: 2%" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <img src="{{asset('img/flags/'.$localeCode.'.png')}}"> {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <script type="application/javascript">
                   let lang = document.getElementById('lang');
                   lang.onchange = function (e) {
                        if (e.target.value === 'ru') {
                            window.location.href = "{{ LaravelLocalization::getLocalizedURL("ru", null, [], true) }}"
                        } else if (e.target.value === 'en') {
                            window.location.href = "{{ LaravelLocalization::getLocalizedURL("en", null, [], true) }}"

                        } else {
                            window.location.href = "{{ LaravelLocalization::getLocalizedURL("zh", null, [], true) }}"
                        }
                    }

                </script>
            </div>
        </nav>

    </div>
</header>


