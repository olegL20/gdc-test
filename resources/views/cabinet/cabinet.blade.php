@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <section class="admin-section" id="accordion">
                    <div class="container">
                        @include('cabinet.user-info', ['user' => $user])
                        <ul class="nav nav-tabs" id="tab-menu" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active"
                                    id="rate-tab"
                                    data-toggle="tab"
                                    href="#rate"
                                    role="tab"
                                    aria-controls="rate"
                                    aria-selected="true">Тарифы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    id="history-tab"
                                    data-toggle="tab"
                                    href="#history"
                                    role="tab"
                                    aria-controls="history"
                                    aria-selected="false">История транзакций</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    id="referal-tab"
                                    data-toggle="tab"
                                    href="#referal"
                                    role="tab"
                                    aria-controls="referal"
                                    aria-selected="false">Реферальная система</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"
                                    id="king-tab"
                                    data-toggle="tab"
                                    href="#king"
                                    role="tab"
                                    aria-controls="king"
                                    aria-selected="false">Крипто король</a>
                            </li>
                            @if ($cashbackValue > 0)
                                <li class="nav-item">
                                    <a class="nav-link"
                                        id="cashback-tab"
                                        data-toggle="tab"
                                        href="#cashback"
                                        role="tab"
                                        aria-controls="cashback"
                                        aria-selected="false">Cashback</a>
                                </li>
                            @endif
                        </ul>
                        <div class="tab-content" id="tab-content">
                            <div class="tab-pane fade show active" id="rate" role="tabpanel" aria-labelledby="rate-tab">
                                <div class="table-responsive">
                                    <table class="rate-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Название тарифного плана</th>
                                            <th scope="col">Дата</th>
                                            <th scope="col">Итог на текущий день</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->rates()->get(['rates.title', 'rates.percent_per_day', 'invested_amount', 'rate_user.created_at']) as $rate)
                                            <tr>
                                                <td>{{$rate->getTitle()}}</td>
                                                <td>{{(new \Carbon\Carbon($rate->created_at))->format('d.m.Y')}}</td>
                                                <td>{{$rate->invested_amount +
                                                $rate->invested_amount*($rate->percent_per_day/100)*\Carbon\Carbon::now()->diffInDays((new \Carbon\Carbon($rate->created_at))->format('d.m.Y'))}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if (count($user->rates) === 0)
                                        <div class="no-result">
                                            На данный момент у вас нету активных тарифных планов
                                        </div>
                                    @endif
                                </div>
                                <div class="rate-plan">
                                    @if ($errors->has('amount'))
                                        <div style="text-align: center; font-size: 2em; color: red">{{$errors->get('amount')[0]}}</div>
                                    @endif
                                    <h3 class="title-plan">Описание тарифных планов</h3>
                                    <div class="plan-category">РУБЛЕВЫЕ ТАРИФЫ</div>
                                    <div class="accordion-list">

                                        @foreach($rates as $key => $rate)
                                            @if ($rate->currency === 'RUB')
                                                <div class="card">


                                                    <button class="btn-collapse @if ($key !== 0) collapsed @endif "
                                                        data-toggle="collapse"
                                                        data-target="#collapse{{$key+1}}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{$key+1}}">
                                                        ТАРИФ «{{$rate->getTitle()}}»
                                                    </button>


                                                    <div id="collapse{{$key+1}}"
                                                        class="collapse @if ($key === 0) show @endif"
                                                        aria-labelledby="headingTwo"
                                                        data-parent="#accordion">
                                                        <div class="card-body">
                                                            <p class="description">{{$rate->getDescription()}}</p>
                                                            @if($rate->getTitle() != 'Партнер')
                                                                <ul class="parameter-list">
                                                                    <li class="parameter-item">
                                                                        <b class="title">Депозит:</b> От
                                                                        {{$rate->getMinAmount()}}
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Ставка:</b> {{$rate->percent_per_day}}
                                                                        % в
                                                                        день
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Период:</b> {{$rate->days}}дней
                                                                    </li>
                                                                    <li class="parameter-item"><b class="title">Рефовод
                                                                            получает
                                                                            {{$rate->referral_percent}}%</b></li>
                                                                    <li class="parameter-item"><b class="title">Распределённые
                                                                            инвестиции</b></li>
                                                                </ul>
                                                            @endif

                                                            <div class="note">*{{__('page.calculate.88')}}</div>

                                                            <div class="button-group">
                                                                <a href="{{route('calculator')}}" class="calculate">{{__('page.calculate.2')}}</a>
                                                                <a href="{{route('invest', ['rate' => $rate])}}"
                                                                    class="invest">ИНВЕСТИРОВАТЬ</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                    <div class="plan-category">ДОЛЛОРОВЫЕ ТАРИФЫ</div>
                                    <div class="accordion-list">
                                        @foreach($rates as $key => $rate)
                                            @if ($rate->currency === 'RUB')
                                                <div class="card">


                                                    <button class="btn-collapse collapsed"
                                                        data-toggle="collapse"
                                                        data-target="#collapse{{$key+10}}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{$key+10}}">
                                                        ТАРИФ «{{$rate->getTitle()}}»
                                                    </button>


                                                    <div id="collapse{{$key+10}}"
                                                        class="collapse "
                                                        aria-labelledby="headingTwo"
                                                        data-parent="#accordion">
                                                        <div class="card-body">
                                                            <p class="description">{{$rate->getDescription()}}</p>
                                                            @if($rate->getTitle() != 'Партнер')
                                                                <ul class="parameter-list">
                                                                    <li class="parameter-item">
                                                                        <b class="title">Депозит:</b> От
                                                                        {{$rate->getMinAmount()}}
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Ставка:</b> {{$rate->percent_per_day}}
                                                                        % в
                                                                        день
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Период:</b> {{$rate->days}}дней
                                                                    </li>
                                                                    <li class="parameter-item"><b class="title">Рефовод
                                                                            получает
                                                                            {{$rate->referral_percent}}%</b></li>
                                                                    <li class="parameter-item"><b class="title">Распределённые
                                                                            инвестиции</b></li>
                                                                </ul>
                                                            @endif
                                                            <div class="note">*{{__('page.calculate.88')}}</div>
                                                            @if (session('errors'))
                                                                <div class="note">{{session('errors')->first('amount')}}</div>
                                                            @endif
                                                            <div class="button-group">
                                                                <a href="{{route('calculator')}}" class="calculate">РАССЧИТАТЬ
                                                                    ПРИБЫЛЬ</a>
                                                                <a href="{{route('invest', ['rate' => $rate])}}"
                                                                    class="invest">ИНВЕСТИРОВАТЬ</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="plan-category">ТАРИФЫ ДЛЯ КИТАЯ</div>
                                    <div class="accordion-list">
                                        @foreach($rates as $key => $rate)
                                            @if ($rate->currency === 'RUB')
                                                <div class="card">


                                                    <button class="btn-collapse collapsed"
                                                        data-toggle="collapse"
                                                        data-target="#collapse{{$key+20}}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{$key+20}}">
                                                        ТАРИФ «{{$rate->getTitle()}}»
                                                    </button>


                                                    <div id="collapse{{$key+20}}"
                                                        class="collapse"
                                                        aria-labelledby="headingTwo"
                                                        data-parent="#accordion">
                                                        <div class="card-body">
                                                            <p class="description">{{$rate->getDescription()}}</p>
                                                            @if($rate->getTitle() != 'Партнер')
                                                                <ul class="parameter-list">
                                                                    <li class="parameter-item">
                                                                        <b class="title">Депозит:</b> От
                                                                        {{$rate->getMinAmount()}}
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Ставка:</b> {{$rate->percent_per_day}}
                                                                        % в
                                                                        день
                                                                    </li>
                                                                    <li class="parameter-item">
                                                                        <b class="title">Период:</b> {{$rate->days}}дней
                                                                    </li>
                                                                    <li class="parameter-item"><b class="title">Рефовод
                                                                            получает
                                                                            {{$rate->referral_percent}}%</b></li>
                                                                    <li class="parameter-item"><b class="title">Распределённые
                                                                            инвестиции</b></li>
                                                                </ul>
                                                            @endif
                                                            <div class="note">*{{__('page.calculate.88')}}</div>

                                                            @if (session('errors'))
                                                                <div class="note">{{session('errors')->first('amount')}}</div>
                                                            @endif
                                                            <div class="button-group">
                                                                <a href="{{route('calculator')}}" class="calculate">РАССЧИТАТЬ
                                                                    ПРИБЫЛЬ</a>
                                                                <a href="{{route('invest', ['rate' => $rate])}}"
                                                                    class="invest">ИНВЕСТИРОВАТЬ</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>


                                </div>
                            </div>
                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                <div class="table-responsive">
                                    <table class="rate-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Дата</th>
                                            <th scope="col">Транзакция</th>
                                            <th scope="col">Сумма</th>
                                            <th scope="col">Остаток</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user->transactions as $transaction)
                                            <tr>
                                                <td>{{$transaction->created_at}}</td>
                                                <td @if (!in_array('INVEST', explode(' ',$transaction->type)) &&
                                                 !in_array('PULL', explode(' ',$transaction->type))) class="recharge" @endif>{{$transaction->type}}</td>
                                                <td @if (!in_array('INVEST', explode(' ',$transaction->type)) &&
                                                 !in_array('PULL', explode(' ',$transaction->type))) class="recharge" @endif>{{$transaction->amount}}</td>
                                                <td>{{$transaction->balance}}</td>

                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="no-result d-none">
                                        На данный момент у вас нету активных тарифных планов
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="referal" role="tabpanel" aria-labelledby="referal-tab">
                                <div class="referal-content">
                                    <div class="referal-text">
                                        <p class="description">Скопируйте реферальную ссылку в поле ниже.</p>
                                        <p class="description">Делитесь реферальной ссылкой удобным способом и получайте
                                            бонусы за новых пользователей.</p>
                                    </div>
                                    @if ($link)
                                        <div class="referal-link">{{route('referral', ['code' => $link])}}</div>
                                        <div class="referal-info">Количество приглашенных пользователей:
                                            <span class="number">{{count($user->invitedUsers)}}</span>
                                        </div>
                                    @else
                                        <div>У Вас пока нет своей реферальной ссылки</div>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="king" role="tabpanel" aria-labelledby="king-tab">
                                <div class="king-content">
                                    <div class="king-text">
                                        <p class="description">К сожалению данная функция пока недоступна.</p>
                                        <p class="description">Приносим наши извинения за причиненное неудобство.</p>
                                    </div>
                                </div>
                            </div>
                            @if ($cashbackValue > 0)
                                <div class="tab-pane fade" id="cashback" role="tabpanel" aria-labelledby="cashback-tab">
                                    <div class="king-content">
                                        <div class="king-text">
                                            <table class="rate-table">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Полная сумма</th>
                                                    <th scope="col">Начисление в день</th>
                                                    <th scope="col">Начислено на текущий день</th>
                                                    <th scope="col">Дата начала</th>
                                                    <th scope="col">Дата начала прибыли</th>
                                                    <th scope="col">Итоговая сумма</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>{{$cashbackValue}}</td>
                                                    <td>{{$cashbackForOneDay}}</td>
                                                    <td>{{$cashback}}</td>
                                                    <td>{{$cashbackStart}}</td>
                                                    <td>{{$incomeDate}}</td>
                                                    <td>{{$cashbackInTheEnd}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
