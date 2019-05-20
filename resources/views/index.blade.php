@extends('layouts.app')
@section('content')
    <section class="welcome">
        <div class="container">
            <div class="welcome-text">
                <h1 class="welcome-title">
                    Добро пожаловать в GDC Invest
                </h1>
                <div class="welcome-description">
                    <p>Первое в мире глобальное децентрализованное инвестиционное сообщество, работающее по принципу
                        распределения инвестиций вкладчиков в различные сферы, трейдинге на биржах и криптобиржах,
                        выдаче займов и многоуровневого маркетинга.</p>
                    <p>Наша цель — глобальное доминирование на рынке.</p>
                </div>
                @if (auth()->guest())
                    <div class="users-block">
                        <a href="{{route('register')}}" class="btn register">РЕГИСТРАЦИЯ</a>
                        <a href="{{route('login')}}" class="btn login">АВТОРИЗАЦИЯ</a>
                    </div>
                @endif
                <a href="{{route('loto')}}" class="banner">
                    <div class="banner-text">
                        <p class="title">Розыгрыш
                            Выиграй до 2 BTC</p>
                        <p class="description">sponsored by General bytes</p>
                    </div>
                    <div class="banner-arrow-block">
                        <img src="img/arrow-banner.png" alt="">
                    </div>
                </a>
            </div>
            <div class="welcome-image d-none d-xl-block">
                <img class="content-image" src="img/welcome.png" alt="">
            </div>
        </div>
    </section>
    <section class="clip-section light-gradient"></section>
    <section class="light-gradient  offers">
        <div class="container">
            <h2 class="section-title offers-title">МЫ ПРЕДЛАГАЕМ</h2>
            <ul class="owl-carousel offers-list">
                @foreach($rates as $rate)
                    @if($rate->title != 'Партнер')
                    <li class="offers-item">
                        <h3 class="item-title">{{$rate->title}}</h3>
                        <h4 class="item-subtitle">ПРОЦЕНТ</h4>
                        <p class="subtitle-description">{{$rate->percent_per_day}}% В ДЕНЬ</p>
                        <h4 class="item-subtitle">ПЕРИОД</h4>
                        <p class="subtitle-description">{{$rate->days}} ДНЕЙ</p>
                        <h4 class="item-subtitle">СУММА</h4>
                        <p class="subtitle-description">от {{$rate->min_amount.' '.$rate->currency}}</p>
                        <h4 class="item-subtitle">ТЕЛО ДЕПОЗИТА</h4>
                        <p class="subtitle-description">ВКЛЮЧЕНО В ВЫПЛАТЫ</p>
                        <a href="" class="make-contribution">СДЕЛАТЬ ВКЛАД</a>
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
                <a href="{{route('calculator')}}" class="calculate-profit mr-2">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                <a href="/profit-calculator#rates" class="calculate-profit all-rate">Все тарифы</a>
            </div>
        </div>
    </section>
    <section class="light-gradient features">
        <div class="container">
            <h2 class="section-title features-title">ПОЧЕМУ МЫ?</h2>
            <ul class="row features-list">
                <li class="col-xl-6 features-item">
                    <img src="img/open-account.png" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">ОТКРЫТИЕ СЧЕТА</h4>
                        <p class="text-description">Регистрация займет у вас несколько минут. Все, что Вам необходимо
                            это заполнить все поля в регистрационной форме.</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="img/for-investor.png" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">ДЛЯ ИНВЕСТОРОВ</h4>
                        <p class="text-description">Инвестиции в развитие компании будут приносить Вам стабильный и
                            постоянный доход. С нами Ваша прибыль составит до 2.4% в день.</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="img/for-partners.png" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">ДЛЯ ПАРТНЕРОВ</h4>
                        <p class="text-description">Привлекайте новых инвесторов и зарабатывайте до 10% от вклада ваших
                            партнеров.</p>
                    </div>
                </li>
                <li class="col-xl-6 features-item">
                    <img src="img/bonus.png" alt="" class="item-image">
                    <div class="item-text">
                        <h4 class="text-title">БОНУСЫ</h4>
                        <p class="text-description">Проводятся постоянные розыгрыши Bitcoin, среди участников
                            проекта. </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="light-gradient company">
        <div class="container">
            <h2 class="section-title">О КОМПАНИИ</h2>
            <div class="company-content">
                <div class="company-text">
                    <h3 class="text-title">Компания GDC Invest</h3>
                    <p class="text-description">Первое в мире глобальное децентрализованное инвестиционное сообщество,
                        работающее по принципу распределения инвестиций вкладчиков в различные сферы, трейдинге на
                        биржах и криптобиржах, выдаче займов и многоуровневого маркетинга. Наша цель — глобальное
                        доминирование на рынке. Наша платформа объединяет все виды финансовых инструментов и людей
                        желающих воспользоваться данными финансовыми инструментами для самых различных целей. Это
                        беспрецедентное событие финансовой эпохи.
                    </p>
                    <p class="text-description">GDC Invest позиционируется как микрофинансовая, инвестиционная и
                        аналитическая организация с продуманной структурой управления, ясными задачами, вполне
                        достижимыми целями.</p>
                    <p class="text-description xl-hidden">Компания GDC Invest уникальна в своём роде, это перспективный
                        механизм с доступным и экономически эффективным маркетинговым подходом. Мы предлагаем ежедневную динамику
                        процентную ставку от 0.6% до 2.4% в день, а также дополнительные возможности для большего
                        заработка. Инвестиционные депозиты работают 100 дней.</p>
                    <p class="text-description bold xl-hidden">
                        Компания GDCinvest - Ваш надежный партнер!</p>
                    <div class="text-center">
                        <a href="{{route('about')}}" class="learn-more">УЗНАТЬ ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <div class="img-container d-none d-xl-block">
                    <img src="img/company.png" alt="" class="company-image md-hidden">
                    <img src="img/md-company.jpg" alt="" class="company-image md-show">
                </div>
                
            </div>

        </div>
    </section>
    <section class="statistic">
        <!-- <div class="container"> -->
        <h2 class="section-title statistic-title">СТАТИСТИКА</h2>
        <ul class="row statistic-list">
            <li class="col-10  col-sm-7  col-xl-4  statistic-item">
                <img src="img/people.png" alt="" class="statistic-icon icon-people md-hidden">
                <img src="img/people-1280.png" alt="" class="statistic-icon icon-people md-show">
                <div class="statistic-count"><p>С НАМИ УЖЕ:</p>
                    <p>1 ЧЕЛ.</p></div>
            </li>
            <li class="col-10 col-sm-7  col-xl-4 statistic-item">
                <img src="img/invest.png" alt="" class="statistic-icon icon-invest md-hidden">
                <img src="img/invest.png" alt="" class="statistic-icon icon-invest md-show">
                <div class="statistic-count"><p>ИНВЕСТИРОВАНО:</p>
                    <p>0.00$</p></div>
            </li>
            <li class="col-10 col-sm-7  col-xl-4 statistic-item">
                <img src="img/cash.png" alt="" class="statistic-icon icon-cash md-hidden">
                <img src="img/cash.png" alt="" class="statistic-icon icon-cash md-show">
                <div class="statistic-count"><p>ЗАРАБОТАНО:</p>
                    <p>0.00$</p></div>
            </li>
        </ul>
        <!-- </div> -->
    </section>
    <section class="light-gradient referal">
        <div class="container">
            <h2 class="section-title">РЕФЕРАЛЬНАЯ ПРОГРАММА</h2>
            <div class="row referal-content">
                <div class="d-none d-xl-block col-xl-6">
                    <img src="img/referal.png" alt="" class="referal-image md-hidden">
                    <img src="img/referal-1280.jpg" alt="" class="referal-image md-show">
                </div>
                <div class="col-12 col-xl-6 referal-text">

                    <p class="text-description">Реферальная программа разработанная компанией <span class="bold">GDC Invest</span>
                        - это специальное деловое предложение для наших партнеров. После прохождения процедуры
                        регистрации на сайте компании, каждый пользователь может стать партнером и автоматически получит
                        возможность привлекать новых инвесторов для сотрудничества с <span
                                class="bold">GDC Invest</span>.


                    </p>
                    <p class="text-description">Реферальная программа позволяет партнерам зарабатывать прибыль в размере
                        от <span class="bold">5%</span> до <span class="bold">10%</span> от суммы депозита, который внес
                        Ваш реферал на свой личный счет для дальнейшего инвестирования.</p>
                    <div class="sm-center">
                        <a href="{{route('partners')}}" class="learn-more">УЗНАТЬ ПОДРОБНЕЕ</a>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="light-gradient sponsors">
        <div class="container">
            <div class=" sponsors-list">
                <a href="#" class=" sponsors-item"><img src="img/pfmoney.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/payeer.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/comodo.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/qiwi.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/ddos.png" alt=""></a>
            </div>

        </div>
    </section>

@endsection
