@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    {{__('page.index.13')}}
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
                <div class=" about-block">
                    <h2 class="section-title">{{__('page.index.1')}}</h2>
                    <p class="paragraph subtitle">
                    {{__('page.about.1')}}</p>
                    <div class="row about-content">
                        <div class="col-xl-6 content-item">
                            <h3 class="text-title">{{__('page.about.2')}}</h3>
                            <div class="paragraph">
                                <p>{{__('page.about.3')}}</p>
                                <p>{{__('page.about.4')}}</p>
                            </div>
                            <div class="paragraph">
                                <p>{{__('page.about.5')}}
                                    </p>
                            </div>

                            <div class="paragraph">
                                <p>{{__('page.about.6')}} </p>
                                <p>{{__('page.about.7')}}</p>
                            </div>

                            <div class="paragraph">
                                <p>{{__('page.about.8')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 content-item image-block">
                            <img src="{{asset('img/about-1.png')}}" alt="" class="about about-1">
                        </div>

                    </div>
                    <h3 class="ways-title">{{__('page.about.9')}} <br>
                        {{__('page.about.10')}}</h3>
                    <div class="ways-earning">
                        <img src="{{asset('img/about-logo.png')}}" alt="" class="ways-block-1">

                        <div class="ways-list">
                            <img src="{{asset('img/about-graf.png')}}" alt="" class="ways-block-2">
                            <div class="list-item item-1">
                                <img src="{{asset('img/1.png')}}" alt="" class="number">
                                <p class="item-text">{{__('page.about.11')}}</p>
                            </div>
                            <div class="list-item item-2">
                                <img src="{{asset('img/2.png')}}" alt="" class="number">
                                <p class="item-text">{{__('page.about.12')}}</p>
                            </div>
                            <div class="list-item item-3">
                                <img src="{{asset('img/3.png')}}" alt="" class="number">
                                <p class="item-text">{{__('page.about.13')}}</p>
                            </div>
                            <div class="list-item item-4">
                                <img src="{{asset('img/4.png')}}" alt="" class="number">
                                <p class="item-text">{{__('page.about.14')}}</p>
                            </div>
                            <div class="list-item item-5">
                                <img src="{{asset('img/5.png')}}" alt="" class="number">
                                <p class="item-text">{{__('page.about.15')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="paragraph">
                        <p>{{__('page.about.16')}}</p>
                        <p>{{__('page.about.17')}}</p>
                    </div>
                    <div class="row about-content">
                        <div class="col-xl-6 content-item">
                            <h3 class="text-title">{{__('page.about.18')}}</h3>
                            <div class="paragraph">
                                <p> {{__('page.about.19')}}</p>
                                <p>{{__('page.about.20')}}</p>
                            </div>
                            <div class="paragraph">
                                <p>{{__('page.about.21')}}</p>
                            </div>

                            <div class="paragraph">
                                <p>{{__('page.about.22')}} </p>

                            </div>
                            <a href="{{route('docs')}}" class="document-base">{{__('menu.docs')}}</a>

                        </div>
                        <div class="col-xl-6 content-item image-block">
                            <img src="{{asset('img/about-2.png')}}" alt="" class="about about-1">
                        </div>
                    </div>
                    <div class="row about-content">
                        <div class="col-xl-6 content-item image-block">
                            <img src="{{asset('img/about-3.png')}}" alt="" class="about about-1">
                        </div>
                        <div class="col-xl-6 content-item">
                            <h3 class="text-title plans-title">{{__('page.about.23')}}</h3>
                            <div class="paragraph">
                                <p>{{__('page.about.24')}}</p>
                            </div>
                            <div class="paragraph">{{__('page.about.25')}}

                            </div>
                            <div class="paragraph">
                                <p><b class="bold-700">{{__('page.about.26')}}</b>

                                </p>

                            </div>


                        </div>

                    </div>

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
