@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    {{__('menu.contacts')}}
                </h1>
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
                <form class="contact-form">
                    <div class="row">
                        <div class="col-xl-6 col-xxl-4 form-item">
                            <p style="justify-content: center;font-size: 20px;margin-bottom: 15px;">{{__('page.contacts.2')}}
                            </p>
                            <h1 style="    font-size: 1.5em;    font-style: oblique;">{{__('page.contacts.1')}}</h1>
                            @if (request()->getHost() !== 'gdc-invest.net')
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+74959759493</p>
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+85258080723</p>
                            @else
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+74951080929</p>
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+85258010932</p>
                            @endif

                        </div>
                        <div class="col-xl-6 col-xxl-8">
                            <div class="row">
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">{{__('page.contacts.3')}}:*</label>
                                    <input type="text" class="field-value" placeholder="{{__('page.contacts.4')}}">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">{{__('page.contacts.5')}}:*</label>
                                    <input type="text" class="field-value" placeholder="{{__('page.contacts.6')}}">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">{{__('page.contacts.7')}}:*</label>
                                    <input type="text" class="field-value" placeholder="{{__('page.contacts.8')}}">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">{{__('page.contacts.9')}}:*</label>
                                    <input type="text" class="field-value" placeholder="{{__('page.contacts.10')}}">
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-xxl-12 form-item">
                                    <label for="" class="field-name">{{__('page.contacts.11')}}:*</label>
                                    <textarea class="field-value" placeholder="{{__('page.contacts.12')}}"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-center">
                        <button type="submit" class="submit">{{__('page.contacts.13')}}</button>
                    </div>
                </form>

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
