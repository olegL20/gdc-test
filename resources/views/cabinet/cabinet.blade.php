@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <section class="main-section" id="accordion">
                    <div class="container">
                        <div class="row users-data">
                            <div class="col-12 col-md-7 user-item">
                                <div class="users-info">
                                    <a href=""
                                        class="change-controller"><i class="fas fa-cog"></i><span>Change</span></a>
                                    <ul class="data-list static-list">
                                        <li class="list-item">
                                            <i class="fas fa-user"></i><span>{{$user->getFullName()}}</span>
                                        </li>
                                        <li class="list-item">
                                            <i class="fas fa-envelope"></i><span>{{$user->email}}</span>
                                        </li>
                                        <li class="list-item">
                                            <i class="fas fa-address-card"></i><span>{{$user->address}}</span>
                                        </li>
                                        <li class="list-item">
                                            <i class="fas fa-money-bill"></i><span>Cash-back: {{$cashback}}</span>
                                        </li>
                                    </ul>
                                    <form action="" class="change-form d-none">
                                        <ul class="data-list">
                                            <li class="list-item">
                                                <i class="fas fa-user"></i><input class="change-input user-name"
                                                    type="text"
                                                    value="Keven Feil">
                                            </li>
                                            <li class="list-item">
                                                <i class="fas fa-envelope"></i><input class="change-input user-mail"
                                                    type="text"
                                                    value="sample_mail@gmail.com">
                                            </li>
                                            <li class="list-item">
                                                <i class="fas fa-envelope"></i><input class="change-input user-password"
                                                    type="text"
                                                    value="password">
                                            </li>
                                        </ul>
                                        <div class="button-group">
                                            <button class="btn cancel">Отмена</button>
                                            <button class="btn save">Сохранить</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="col-12 col-md-5 user-item">
                                <div class="users-balance">
                                    <div class="balance-title">Баланс:</div>
                                    <div class="balance-value">{{$user->balance->amount}}$</div>
                                    <button disabled class="get-cash disabled">Вывод средств</button>
                                    <a href="{{route('balance', ['user' => $user])}}" class="get-cash">Пополнить баланс</a>
                                </div>

                            </div>
                        </div>

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

                                        </tbody>
                                    </table>
                                    <div class="no-result">
                                        На данный момент у вас нету активных тарифных планов
                                    </div>
                                </div>
                                <div class="rate-plan">
                                    <h3 class="title-plan">Описание тарифных планов</h3>
                                    <div class="plan-category">РУБЛЕВЫЕ ТАРИФЫ</div>
                                    <div class="accordion-list">

                                        <div class="card">


                                            <button class="btn-collapse" data-toggle="collapse" data-target="#collapse1"
                                                aria-expanded="false" aria-controls="collapse1">
                                                ТАРИФ «Старт»
                                            </button>


                                            <div id="collapse1" class="collapse show" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Это базовый тариф. Он позволяет сделать
                                                        первые шаги в инвестировании своих средств. Вне зависимости от
                                                        знаний фондового рынка и правил трейдинга, Вы можете заработать
                                                        на этом, так как Ваши деньги будут реинвестированы в брокерскую
                                                        компанию Interactive Investor. </p>
                                                    <p class="description">Interactive investor входит в десятку лучших
                                                        брокерских фирм Соединенного королевства. GDCinvest заключила
                                                        договор с Interactive Investor, дающий гарантию заработка для
                                                        наших инвесторов. Гибкая финансовая политика компании позволяет
                                                        сделать минимальные инвестиции. </p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        70% к телу депозита</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            7000р до 70000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 0.7% в
                                                            день
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                5%</b></li>
                                                        <li class="parameter-item"><b class="title">Распределённые
                                                                инвестиции</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse2"
                                                aria-expanded="false"
                                                aria-controls="collapse2">
                                                ТАРИФ «Деньги в квадрате»
                                            </button>


                                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">При выборе данного тарифа компания
                                                        реинвистирует Ваши деньги в микрофинансовый сектор экономики
                                                        КНР. Это один из самых выгодных вариантов инвестирования (рост
                                                        количества оформленных микрозаймов вырос на 64% по сравнению с
                                                        2017г)</p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        100% к телу депозита</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            100000р до 250000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 1% в
                                                            день
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в Частные
                                                                микрозаймы</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse3"
                                                aria-expanded="false"
                                                aria-controls="collapse3">
                                                ТАРИФ «На пол пути к миллиону»
                                            </button>


                                            <div id="collapse3" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">При выборе данного тарифа компания
                                                        реинвистирует Ваши деньги в кредитование бизнеса и юридических
                                                        лиц. Тариф был разработан в сотрудничестве с Industrial and
                                                        Commercial Bank of China. Это крупнейший китайский коммерческий
                                                        банк.</p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        150% к телу депозита</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до 300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Бизнес</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse4"
                                                aria-expanded="false"
                                                aria-controls="collapse4">
                                                ТАРИФ «Расчетливый инвестор»
                                            </button>


                                            <div id="collapse4" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">При выборе данного тарифа Ваши деньги будут
                                                        реинвестированы в займы под залог имущества.</p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        170% к телу депозита</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до 300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                12%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                кредитование под залог</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse5"
                                                aria-expanded="false"
                                                aria-controls="collapse5">
                                                ТАРИФ «Крипто король»
                                            </button>


                                            <div id="collapse5" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">При выборе данного тарифа компания
                                                        реинвистирует Ваши деньги в блокчейн технологии, BitcoinATM, и
                                                        трейдинг на криптобиржах. Тариф разработан в сотрудничестве с
                                                        компанией General Bytes. </p>
                                                    <p class="description">General Bytes – это компания по производству
                                                        оборудования и программного обеспечения, связанного с биткоином,
                                                        блокчейном и технологиями open source.</p>
                                                    <p class="description">Заключенный между нами договор, позволяет
                                                        равномерно распределить инвестиции между трейдингом и вложениями
                                                        в оборудования General bytes. </p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        200% к телу депозита</p>

                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает 0,5
                                                                ВТС на кабинет</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в майнинг
                                                                криптовалют и трейдинг на криптобиржах</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse6"
                                                aria-expanded="false"
                                                aria-controls="collapse6">
                                                ТАРИФ «Миллионер за 100 дней»
                                            </button>


                                            <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">При выборе данного тарифа компания
                                                        реинвестирует Ваши деньги в строительный сектор экономики КНР.
                                                        Строительные займы считаются самыми крупными в сфере
                                                        финансирования и кредитования. Данный тариф разработан в
                                                        сотрудничестве с China Communications Construction. Это
                                                        бесспорный лидер на рынке строительства КНР и один из мировых
                                                        лидеров в области проектирования и строительства портов.</p>
                                                    <p class="description">По истечению срока тарифа прибыль составит
                                                        240% к телу депозита</p>

                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> от 300
                                                            000 р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                15%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Строительство</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse17"
                                                aria-expanded="false"
                                                aria-controls="collapse17">
                                                ТАРИФ «Партнер»
                                            </button>


                                            <div id="collapse17"
                                                class="collapse"
                                                aria-labelledby="heading6"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Это эксклюзивный тариф, который не требует от
                                                        Вас абсолютно НИКАКИХ вложений, и позволяет заработать на
                                                        сотрудничестве с GDCinvest. При привлечении нового инвестора для
                                                        сотрудничества с нами, реферальная программа позволяет
                                                        заработать до 15% от привлеченных инвестиций. Так же партнер
                                                        получает от компании бонусные 100$.</p>
                                                    <p class="description">Благодаря успешному анализу азиатского рынка
                                                        компания GDCinvestсмогла предложить выгодные условия, как
                                                        инвесторам, так и заемщикам. Мы заключили договора с компаниями,
                                                        занимающими лидирующие позиции в ключевых отраслях экономики
                                                        КНР. Такой подход позволяет нам предложить инвесторам различные
                                                        инструменты заработка и возможность реинвестирования финансов в
                                                        различные сферы экономики. Так же все инвестиции застрахованы
                                                        China Pacific Insurance Company.</p>
                                                    <p class="description">Совокупность всех факторов делает компанию
                                                        GDCinvestуникальной платформойу которой нет достойных аналогов в
                                                        мире. Мы можем гарантировать заработок и делаем это</p>


                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="plan-category">ДОЛЛОРОВЫЕ ТАРИФЫ</div>
                                    <div class="accordion-list">


                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse12"
                                                aria-expanded="false"
                                                aria-controls="collapse12">
                                                ТАРИФ «Деньги в квадрате»
                                            </button>


                                            <div id="collapse12" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            100000р до
                                                            250000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 1% в
                                                            день
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в Частные
                                                                микрозаймы</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse13"
                                                aria-expanded="false"
                                                aria-controls="collapse13">
                                                ТАРИФ «На пол пути к миллиону»
                                            </button>


                                            <div id="collapse13" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до
                                                            300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Бизнес</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse14"
                                                aria-expanded="false"
                                                aria-controls="collapse14">
                                                ТАРИФ «Расчетливый инвестор»
                                            </button>


                                            <div id="collapse14" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до
                                                            300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                12%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                кредитование под
                                                                залог</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse15"
                                                aria-expanded="false"
                                                aria-controls="collapse15">
                                                ТАРИФ «Крипто король»
                                            </button>


                                            <div id="collapse15" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает 0,5
                                                                ВТС на
                                                                кабинет</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в майнинг
                                                                криптовалют
                                                                и трейдинг на криптобиржах</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse16"
                                                aria-expanded="false"
                                                aria-controls="collapse16">
                                                ТАРИФ «Миллионер за 100 дней»
                                            </button>


                                            <div id="collapse16" class="collapse" aria-labelledby="heading6"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> от 300
                                                            000 р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                15%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Строительство</b>
                                                        </li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="plan-category">ТАРИФЫ ДЛЯ КИТАЯ</div>
                                    <div class="accordion-list">


                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse7"
                                                aria-expanded="false"
                                                aria-controls="collapse7">
                                                ТАРИФ «Деньги в квадрате»
                                            </button>


                                            <div id="collapse7" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            100000р до
                                                            250000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 1% в
                                                            день
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в Частные
                                                                микрозаймы</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse8"
                                                aria-expanded="false"
                                                aria-controls="collapse8">
                                                ТАРИФ «На пол пути к миллиону»
                                            </button>


                                            <div id="collapse8" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до
                                                            300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                10%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Бизнес</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse9"
                                                aria-expanded="false"
                                                aria-controls="collapse9">
                                                ТАРИФ «Расчетливый инвестор»
                                            </button>


                                            <div id="collapse9" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> От
                                                            200000р до
                                                            300000р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                12%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                кредитование под
                                                                залог</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse10"
                                                aria-expanded="false"
                                                aria-controls="collapse10">
                                                ТАРИФ «Крипто король»
                                            </button>


                                            <div id="collapse10" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает 0,5
                                                                ВТС на
                                                                кабинет</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в майнинг
                                                                криптовалют
                                                                и трейдинг на криптобиржах</b></li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">


                                            <button class="btn-collapse collapsed "
                                                data-toggle="collapse"
                                                data-target="#collapse11"
                                                aria-expanded="false"
                                                aria-controls="collapse11">
                                                ТАРИФ «Миллионер за 100 дней»
                                            </button>


                                            <div id="collapse11" class="collapse" aria-labelledby="heading6"
                                                data-parent="#accordion">
                                                <div class="card-body">
                                                    <p class="description">Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr,
                                                        sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
                                                        aliquyam
                                                        erat, sed diam voluptua. At vero eos et accusam et justo duo
                                                        dolores et ea
                                                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                                                        Lorem ipsum
                                                        dolor sit amet. Lorem ipsum dolor sit amet, consetetur
                                                        sadipscing elitr, sed
                                                        diam.</p>
                                                    <ul class="parameter-list">
                                                        <li class="parameter-item"><b class="title">Депозит:</b> от 300
                                                            000 р.
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                                        <li class="parameter-item"><b class="title">Период:</b> 100 дней
                                                        </li>
                                                        <li class="parameter-item"><b class="title">Рефовод получает
                                                                15%</b></li>
                                                        <li class="parameter-item"><b class="title">Инвестиции в
                                                                Строительство</b>
                                                        </li>
                                                    </ul>
                                                    <div class="note">*Примечание касательно страховки</div>
                                                    <div class="button-group">
                                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                                        <a href="#accordion" class="invest">ИНВЕСТИРОВАТЬ</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
                                        <tr>
                                            <td>10.01.2019
                                            </th>
                                            <td class="recharge">Пополнение баланса</td>
                                            <td class="recharge">1500$</td>
                                            <td>3000$</td>

                                        </tr>
                                        <tr>
                                            <td>8.01.2019
                                            </th>
                                            <td>Вывод средств</td>
                                            <td>-500$</td>
                                            <td>1000$</td>

                                        </tr>
                                        <tr>
                                            <td>01.01.2019
                                            </th>
                                            <td class="recharge">Пополнение баланса</td>
                                            <td class="recharge">1500$</td>
                                            <td>1500$</td>

                                        </tr>

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
                                    <div class="referal-link">http://www.sample_site.com/index.php?ref=newuser=23</div>
                                    <div class="referal-info">Количество приглашенных пользователей:
                                        <span class="number">11</span></div>
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
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
