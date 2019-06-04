@extends('layouts.app')
@section('content')

    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    {{__('page.partners.1')}}
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

                <div class="main-container" id="accordion">
                    <h2 class="partners-title">{{__('page.partners.2')}}</h2>
                    <div class="partners-text">


                        <p class="paragraph">{{__('page.partners.3')}}</p>
                        <p class="paragraph">{{__('page.partners.4')}}</p>
                    </div>
                    <h3 class="rate-title">{{__('page.partners.5')}}</h3>
                    <div class="accordion-list">
                        <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    ТАРИФ {{$rate->getTitle()}}
                                </button>


                                <div id="collapse17" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">{{$rate->getDescription()}}</p>
                                    <div class="note">*{{__('page.calculate.88')}}</div>

                                    <a href="{{route('calculator')}}" class="calculate">{{__('page.calculate.2')}}</a>

                                </div>
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
                <a href="#" style="width: 250px;" class=" sponsors-item"><img src="{{asset('img/visa.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/mastercard.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/pfmoney.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/payeer.png')}}" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="{{asset('img/qiwi.png')}}" alt=""></a>
            </div>

        </div>
    </section>
@endsection
