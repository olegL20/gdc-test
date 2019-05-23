@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    ДОКУМЕНТАЛЬНАЯ БАЗА
                </h1>
                <div class="col-12 col-xl-10 heading-description">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut
                        labore et dolore magna aliquyam erat, sed diam voluptua.</p>

                </div>
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

                <img src="{{asset('img/base-cpi.png')}}" alt="" class="base-page">


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
