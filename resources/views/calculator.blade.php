@extends('layouts.app')
@section('content')
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    РАССЧИТАЙТЕ СВОЮ ПРИБЫЛЬ
                </h1>

            </div>

        </div>
    </section>
    <section class="light-gradient clip-section"></section>

    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <div class="calculate-profit" id="accordion">
                    <h2 class="rate-title">Выберите интересующий вас тариф:</h2>
                    <div class="button-group">
                        @foreach($rates as $rate)
                            <button class="calculate-option @if ($rates->first()->id === $rate->id ) active @endif" data-id="{{$rate->id}}" id="option-{{$rate->id}}">{{$rate->title}}</button>
                        @endforeach
                    </div>
                    <div class="invest-steps">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 steps-item">
                                <p class="step-title">01. Выберите валюту инвестирования:</p>
                                <div class="currency-group">
                                    <div class="currency-item">
                                        <input type="radio" checked name="currency-value" id="cur-1"><label for="cur-1"
                                            class="currency-title">Рубль</label>
                                    </div>
                                    {{--                                    <div class="currency-item">--}}
                                    {{--                                        <input type="radio" name="currency-value" id="cur-2"><label for="cur-2"--}}
                                    {{--                                            class="currency-title">Евро</label>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="currency-item">--}}
                                    {{--                                        <input type="radio" name="currency-value" id="cur-3"><label for="cur-3"--}}
                                    {{--                                            class="currency-title">Доллар</label>--}}
                                    {{--                                    </div>--}}
                                </div>
                                <div class="currency-group">
                                    {{--                                    <div class="currency-item">--}}
                                    {{--                                        <input type="radio" name="currency-value" id="cur-4"><label for="cur-4"--}}
                                    {{--                                            class="currency-title">Тенге</label>--}}
                                    {{--                                    </div>--}}
                                    {{--                                    <div class="currency-item">--}}
                                    {{--                                        <input type="radio" name="currency-value" id="cur-5"><label for="cur-5"--}}
                                    {{--                                            class="currency-title">Биткоин</label>--}}
                                    {{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-xl-4 steps-item">
                                <p class="step-title">02. Введите сумму, которую хотите инвестировать:</p>
                                <div class="text-center">
                                    <input type="number" class="amount" min="{{$rates->first()->min_amount}}" max="1000000" value="{{$rates->first()->min_amount}}">

                                </div>
                                <div class="text-center">
                                    <input type="range" class="range-amount" min="{{$rates->first()->min_amount}}" max="1000000" value="{{$rates->first()->min_amount}}">
                                </div>
                            </div>
                            <div class="col-xl-5 col-xxl-3 steps-item">
                                <div class="total">
                                    <div class="total-parameter">
                                        <div class="title">Ваше ежедневное начисление составит:</div>
                                        <div class="value" id="perDay">8</div>
                                    </div>
                                    <div class="total-parameter">
                                        <div class="title">Общая сумма полученных вами средств:</div>
                                        <div class="value" id="total">3200</div>
                                    </div>
                                    <div class="total-parameter">
                                        <div class="title">Из них чистая прибыль:</div>
                                        <div class="value" id="profit">2200</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                        </div>

                    </div>
                    <div class="rate-plan" id="rates">
                        <h3 class="title-plan">Описание тарифных планов</h3>
                        <div class="plan-category">РУБЛЕВЫЕ ТАРИФЫ</div>
                        <div class="accordion-list">
                            @foreach($rates as $rate)
                                <div class="card">


                                    <button class="btn-collapse @if ($rates->first()->id !== $rate->id) collapsed @endif" data-toggle="collapse" data-target="#collapse{{$rate->id}}"
                                        aria-expanded="false" aria-controls="collapse{{$rate->id}}">
                                        ТАРИФ «{{$rate->title}}»
                                    </button>


                                    <div id="collapse{{$rate->id}}" class="collapse @if ($rates->first()->id === $rate->id) show @endif" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="description">{{$rate->description}}</p>
                                            <ul class="parameter-list">
                                                <li class="parameter-item"><b class="title">Депозит:</b> От {{$rate->min_amount}}
                                                </li>
                                                <li class="parameter-item"><b class="title">Ставка:</b> {{$rate->percent_per_day}}% в день</li>
                                                <li class="parameter-item"><b class="title">Период:</b> {{$rate->days}} дней</li>
                                                <li class="parameter-item"><b class="title">Рефовод получает {{$rate->referral_percent}}%</b></li>
                                                <li class="parameter-item"><b class="title">Распределённые
                                                        инвестиции</b>
                                                </li>
                                            </ul>
                                            <div class="note">*Примечание касательно страховки</div>

                                            <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="plan-category">ДОЛЛОРОВЫЕ ТАРИФЫ</div>
                        <div class="accordion-list">
                            @foreach($rates as $rate)
                                <div class="card">


                                    <button class="btn-collapse @if ($rates->first()->id !== $rate->id) collapsed @endif" data-toggle="collapse" data-target="#collapse{{$rate->id+10}}"
                                        aria-expanded="false" aria-controls="collapse{{$rate->id+10}}">
                                        ТАРИФ «{{$rate->title}}»
                                    </button>


                                    <div id="collapse{{$rate->id+10}}" class="collapse @if ($rates->first()->id === $rate->id) show @endif" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="description">{{$rate->description}}</p>
                                            <ul class="parameter-list">
                                                <li class="parameter-item"><b class="title">Депозит:</b> От {{$rate->min_amount}}
                                                </li>
                                                <li class="parameter-item"><b class="title">Ставка:</b> {{$rate->percent_per_day}}% в день</li>
                                                <li class="parameter-item"><b class="title">Период:</b> {{$rate->days}} дней</li>
                                                <li class="parameter-item"><b class="title">Рефовод получает {{$rate->referral_percent}}%</b></li>
                                                <li class="parameter-item"><b class="title">Распределённые
                                                        инвестиции</b>
                                                </li>
                                            </ul>
                                            <div class="note">*Примечание касательно страховки</div>

                                            <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="plan-category">ТАРИФЫ ДЛЯ КИТАЯ</div>
                        <div class="accordion-list">

                            @foreach($rates as $rate)
                                <div class="card">


                                    <button class="btn-collapse @if ($rates->first()->id !== $rate->id) collapsed @endif" data-toggle="collapse" data-target="#collapse{{$rate->id+20}}"
                                        aria-expanded="false" aria-controls="collapse{{$rate->id+20}}">
                                        ТАРИФ «{{$rate->title}}»
                                    </button>


                                    <div id="collapse{{$rate->id+20}}" class="collapse @if ($rates->first()->id === $rate->id) show @endif" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            <p class="description">{{$rate->description}}</p>
                                            <ul class="parameter-list">
                                                <li class="parameter-item"><b class="title">Депозит:</b> От {{$rate->min_amount}}
                                                </li>
                                                <li class="parameter-item"><b class="title">Ставка:</b> {{$rate->percent_per_day}}% в день</li>
                                                <li class="parameter-item"><b class="title">Период:</b> {{$rate->days}} дней</li>
                                                <li class="parameter-item"><b class="title">Рефовод получает {{$rate->referral_percent}}%</b></li>
                                                <li class="parameter-item"><b class="title">Распределённые
                                                        инвестиции</b>
                                                </li>
                                            </ul>
                                            <div class="note">*Примечание касательно страховки</div>

                                            <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

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
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/rates.js')}}"></script>

@endsection
