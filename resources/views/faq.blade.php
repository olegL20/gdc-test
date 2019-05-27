@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    {{__('page.faq.50')}}
                </h1>

                @if (auth()->guest())
                    <div class="users-block">
                        <a href="{{route('register')}}" class="btn register">{{__('auth.Register')}}</a>
                        <a href="{{route('login')}}" class="btn login">{{__('auth.signin')}}</a>
                    </div>
                @endif
            </div>

        </div>
    </section>
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <div class="main-container">
                    <ul class="overflow row questions-list">
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title"> {{__('page.faq.1')}}</h4>
                            <p class="questions-answer">{{__('page.faq.2')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.3')}}</h4>
                            <p class="questions-answer">{{__('page.faq.4')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.5')}}</h4>
                            <p class="questions-answer">{{__('page.faq.6')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.7')}}</h4>
                            <p class="questions-answer">{{__('page.faq.8')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.9')}}</h4>
                            <p class="questions-answer">{{__('page.faq.10')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.11')}}</h4>
                            <p class="questions-answer">{{__('page.faq.12')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.13')}}</h4>
                            <p class="questions-answer">{{__('page.faq.14')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.15')}}</h4>
                            <p class="questions-answer">{{__('page.faq.16')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.17')}}</h4>
                            <p class="questions-answer">{{__('page.faq.18')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.19')}}</h4>
                            <p class="questions-answer">{{__('page.faq.20')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.21')}}</h4>
                            <p class="questions-answer">{{__('page.faq.22')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.23')}}</h4>
                            <p class="questions-answer">{{__('page.faq.24')}}</p>
                        </li>
                        <li class="col-xl-12 col-xxl-6 questions-item ">
                            <h4 class="questions-title">{{__('page.faq.25')}}</h4>
                            <p class="questions-answer">{{__('page.faq.26')}}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="light-gradient sponsors">
        <div class="container">
            <div class=" sponsors-list">
                <a href="#" class=" sponsors-item"><img src="{{asset('img/pfmoney.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/payeer.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/comodo.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/qiwi.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/ddos.png')}}" alt=""></a>
            </div>

        </div>
    </section>
@endsection
