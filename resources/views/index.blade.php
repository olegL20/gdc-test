@extends('layouts.app')
@php
use Carbon\Carbon;
    $dataBegin = new Carbon('1.06.2019');
    $ppl = 873 + rand(4, 10) * Carbon::now()->diffInDays($dataBegin);
    $investedBegin = 246900;
    $invested = $investedBegin + $investedBegin*(rand(1, 3)/100) * Carbon::now()->diffInDays($dataBegin);
    $earnedBegin = 320970;
    $earned = $earnedBegin + $earnedBegin* (rand(3, 5)/100) *Carbon::now()->diffInDays($dataBegin);
    @endphp
@section('content')
    <section class="welcome">
        <div class="container">
            <div class="welcome-text">
                <h1 class="welcome-title">
                    {{__('page.index.1')}}
                </h1>
                <div class="welcome-description">
                    <p>{{__('page.index.2')}}</p>
                    <p>{{__('page.index.3')}}</p>
                </div>
                @if (auth()->guest())
                    <div class="users-block">
                        <a href="{{route('register')}}" class="btn register">{{__('page.btn.1')}}</a>
                        <a href="{{route('login')}}" class="btn login">{{__('page.btn.2')}}</a>
                    </div>
                @endif
                <a href="{{route('loto')}}" class="banner">
                    <div class="banner-text">
                        <p class="title">{{__('page.roulette.1')}}</p>
                        <p class="description">sponsored by General bytes</p>
                    </div>
                    <div class="banner-arrow-block">
                        <img src="{{asset('img/arrow-banner.png')}}" alt="">
                    </div>
                </a>
            </div>
            <div class="welcome-image d-none d-xl-block">
                <img class="content-image" src="{{asset('img/welcome.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="clip-section light-gradient"></section>
    <section class="light-gradient  offers">
        <div class="container">
            <h2 class="section-title offers-title">{{__('page.calculate.10')}}</h2>
            <ul class="owl-carousel offers-list">
                @foreach($rates as $rate)
                    @if($rate->title != 'Партнер')
                        <li class="offers-item">
                            <h3 class="item-title">{{$rate->getTitle()}}</h3>
                            <h4 class="item-subtitle">{{__('page.calculate.4')}}</h4>
                            <p class="subtitle-description">{{$rate->percent_per_day}}% {{__('page.calculate.11')}}</p>
                            <h4 class="item-subtitle">{{__('page.calculate.6')}}</h4>
                            <p class="subtitle-description">{{$rate->days}} {{__('page.calculate.12')}}</p>
                            <h4 class="item-subtitle">{{__('page.calculate.5')}}</h4>
                            <p class="subtitle-description">{{__('page.calculate.13')}} {{$rate->getMinAmount()}}</p>
                            <h4 class="item-subtitle">{{__('page.calculate.7')}}</h4>
                            <p class="subtitle-description">{{__('page.calculate.9')}}</p>
                            <a href="" class="make-contribution">{{__('page.calculate.8')}}</a>
                        </li>
                    @endif
                @endforeach

                {{--                <li class="offers-item">--}}
                {{--                    <h3 class="item-title">ДЕНЬГИ--}}
                {{--                        В КВАДРАТЕ</h3>--}}
                {{--                    <h4 class="item-subtitle">ПРОЦЕНТ</h4>--}}
                {{--                    <p class="subtitle-description">1% В ДЕНЬ</p>--}}
                {{--                    <h4 class="item-subtitle">ПЕРИОД</h4>--}}
                {{--                    <p class="subtitle-description">100 ДНЕЙ</p>--}}
                {{--                    <h4 class="item-subtitle">СУММА</h4>--}}
                {{--                    <p class="subtitle-description">100000RUB-250000RUB</p>--}}
                {{--                    <h4 class="item-subtitle">ТЕЛО ДЕПОЗИТА</h4>--}}
                {{--                    <p class="subtitle-description">ВКЛЮЧЕНО В ВЫПЛАТЫ</p>--}}
                {{--                    <a href="" class="make-contribution">СДЕЛАТЬ ВКЛАД</a>--}}
                {{--                </li>--}}
                {{--                <li class="offers-item">--}}
                {{--                    <h3 class="item-title">НА ПОЛПУТИ К--}}
                {{--                        МИЛЛИОНУ</h3>--}}
                {{--                    <h4 class="item-subtitle">ПРОЦЕНТ</h4>--}}
                {{--                    <p class="subtitle-description">15% В ДЕНЬ</p>--}}
                {{--                    <h4 class="item-subtitle">ПЕРИОД</h4>--}}
                {{--                    <p class="subtitle-description">100 ДНЕЙ</p>--}}
                {{--                    <h4 class="item-subtitle">СУММА</h4>--}}
                {{--                    <p class="subtitle-description">200000RUB-300000RUB</p>--}}
                {{--                    <h4 class="item-subtitle">ТЕЛО ДЕПОЗИТА</h4>--}}
                {{--                    <p class="subtitle-description">ВКЛЮЧЕНО В ВЫПЛАТЫ</p>--}}
                {{--                    <a href="" class="make-contribution">СДЕЛАТЬ ВКЛАД</a>--}}
                {{--                </li>--}}
                {{--                <li class="offers-item">--}}
                {{--                    <h3 class="item-title">РАСЧЕТЛИВЫЙ--}}
                {{--                        ИНВЕСТОР</h3>--}}
                {{--                    <h4 class="item-subtitle">ПРОЦЕНТ</h4>--}}
                {{--                    <p class="subtitle-description">17% В ДЕНЬ</p>--}}
                {{--                    <h4 class="item-subtitle">ПЕРИОД</h4>--}}
                {{--                    <p class="subtitle-description">100 ДНЕЙ</p>--}}
                {{--                    <h4 class="item-subtitle">СУММА</h4>--}}
                {{--                    <p class="subtitle-description">7000RUB-70000RUB</p>--}}
                {{--                    <h4 class="item-subtitle">ТЕЛО ДЕПОЗИТА</h4>--}}
                {{--                    <p class="subtitle-description">ВКЛЮЧЕНО В ВЫПЛАТЫ</p>--}}
                {{--                    <a href="" class="make-contribution">СДЕЛАТЬ ВКЛАД</a>--}}
                {{--                </li>--}}
                {{--                <li class="offers-item">--}}
                {{--                    <h3 class="item-title">КРИПТО КОРОЛЬ</h3>--}}
                {{--                    <h4 class="item-subtitle">ПРОЦЕНТ</h4>--}}
                {{--                    <p class="subtitle-description">2% В ДЕНЬ</p>--}}
                {{--                    <h4 class="item-subtitle">ПЕРИОД</h4>--}}
                {{--                    <p class="subtitle-description">100 ДНЕЙ</p>--}}
                {{--                    <h4 class="item-subtitle">СУММА</h4>--}}
                {{--                    <p class="subtitle-description">1 BTC</p>--}}
                {{--                    <h4 class="item-subtitle">ТЕЛО ДЕПОЗИТА</h4>--}}
                {{--                    <p class="subtitle-description">ВКЛЮЧЕНО В ВЫПЛАТЫ</p>--}}
                {{--                    <a href="" class="make-contribution">СДЕЛАТЬ ВКЛАД</a>--}}
                {{--                </li>--}}
            </ul>
            <div class="text-center d-none d-xl-block">
                <a href="{{route('calculator')}}" class="calculate-profit mr-2">{{__('page.calculate.2')}}</a>
                <a href="/profit-calculator#rates" class="calculate-profit all-rate">{{__('page.calculate.3')}}</a>
            </div>
        </div>
    </section>
    <section class="light-gradient features">
        <div class="container">
            <h2 class="section-title features-title">{{__('page.index.4')}}</h2>
            <ul class="row features-list">
                <li class="col-xl-6 features-item">
                    <img src="{{asset('img/open-account.png')}}" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">{{__('page.index.5')}}</h4>
                        <p class="text-description">{{__('page.index.6')}}</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="{{asset('img/for-investor.png')}}" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">{{__('page.index.7')}}</h4>
                        <p class="text-description">{{__('page.index.8')}}</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="{{asset('img/for-partners.png')}}" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">{{__('page.index.9')}}</h4>
                        <p class="text-description">{{__('page.index.10')}}</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="{{asset('img/bonus.png')}}" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">{{__('page.index.11')}}</h4>
                        <p class="text-description">{{__('page.index.12')}}</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="light-gradient company">
        <div class="container">
            <h2 class="section-title">{{__('page.index.13')}}</h2>
            <div class="company-content">
                <div class="company-text">
                    <h3 class="text-title">{{__('page.index.14')}}</h3>
                    <p class="text-description">
                        {{__('page.index.15')}}
                    </p>
                    <p class="text-description">{{__('page.index.16')}}</p>
                    <p class="text-description xl-hidden">{{__('page.index.17')}}</p>
                    <p class="text-description bold xl-hidden">
                        {{__('page.index.18')}}</p>
                    <div class="text-center">
                        <a href="{{route('about')}}" class="learn-more">{{__('page.index.19')}}</a>
                    </div>
                </div>
                <div class="img-container d-none d-xl-block">
                    <img src="{{asset('img/company.png')}}" alt="" class="company-image md-hidden">
                    <img src="{{asset('img/md-company.jpg')}}" alt="" class="company-image md-show">
                </div>

            </div>

        </div>
    </section>
    <section class="statistic">
        <!-- <div class="container"> -->
        <h2 class="section-title statistic-title">{{__('page.index.23')}}</h2>
        <ul class="row statistic-list">
            <li class="col-10  col-sm-7  col-xl-4  statistic-item">
                <img src="{{asset('img/people.png')}}" alt="" class="statistic-icon icon-people md-hidden">
                <img src="{{asset('img/people-1280.png')}}" alt="" class="statistic-icon icon-people md-show">
                <div class="statistic-count"><p>{{__('page.index.24')}}</p>
                    <p>{{$ppl}}</p></div>
            </li>
            <li class="col-10 col-sm-7  col-xl-4 statistic-item">
                <img src="{{asset('img/invest.png')}}" alt="" class="statistic-icon icon-invest md-hidden">
                <img src="{{asset('img/invest.png')}}" alt="" class="statistic-icon icon-invest md-show">
                <div class="statistic-count"><p>{{__('page.index.25')}}</p>
                    <p>{{number_format($invested, 2, '.', ' ')}}$</p></div>
            </li>
            <li class="col-10 col-sm-7  col-xl-4 statistic-item">
                <img src="{{asset('img/cash.png')}}" alt="" class="statistic-icon icon-cash md-hidden">
                <img src="{{asset('img/invest.png')}}" alt="" class="statistic-icon icon-cash md-show">
                <div class="statistic-count"><p>{{__('page.index.26')}}</p>
                    <p>{{number_format($earned, 2, '.', ' ')}}$</p></div>
            </li>
        </ul>
        <!-- </div> -->
    </section>
    <section class="light-gradient referal">
        <div class="container">
            <h2 class="section-title">{{__('page.index.20')}}</h2>
            <div class="row referal-content">
                <div class="d-none d-xl-block col-xl-6">
                    <img src="{{asset('img/referal.png')}}" alt="" class="referal-image md-hidden">
                    <img src="{{asset('img/referal-1280.jpg')}}" alt="" class="referal-image md-show">
                </div>
                <div class="col-12 col-xl-6 referal-text">

                    <p class="text-description">

                        {{__('page.index.21')}}
                    </p>
                    <p class="text-description">
                        {{__('page.index.22')}}</p>
                    <div class="sm-center">
                        <a href="{{route('partners')}}" class="learn-more">{{__('page.index.19')}}</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="light-gradient sponsors">
        <div class="container">
            <div class=" sponsors-list">
                <a href="#" style="width: 250px;" class=" sponsors-item"><img src="{{asset('img/visa.png')}}"
                        alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/mastercard.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/pfmoney.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/payeer.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/qiwi.png')}}" alt=""></a>
            </div>

        </div>
    </section>

@endsection
