@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    {{strtoupper(__('menu.docs'))}}
                </h1>
                <div class="col-12 col-xl-10 heading-description">

                </div>
                @if (auth()->guest())
                    <div class="users-block">
                        <a href="{{route('register')}}" class="btn register">{{__('page.btn.1')}}</a>
                        <a href="{{route('login')}}" class="btn login">{{__('page.btn.2')}}</a>
                    </div>
                @endif
            </div>
        </div>
    </section>
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <img src="{{asset('img/new-docs.jpg')}}" class="base-page" alt="">
            </div>
        </div>
    </section>
@endsection
