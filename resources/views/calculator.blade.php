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
                        <button class="calculate-option active">СТАРТ</button>
                        <button class="calculate-option">ДЕНЬГИ В КВАДРАТЕ</button>
                        <button class="calculate-option">НА ПОЛПУТИ К МИЛЛИОНУ</button>
                        <button class="calculate-option">РАСЧЕТЛИВЫЙ ИНВЕСТОР</button>
                        <button class="calculate-option">КРИПТО КОРОЛЬ</button>
                    </div>
                    <div class="invest-steps">
                        <div class="row justify-content-between">
                            <div class="col-xl-3 steps-item">
                                <p class="step-title">01. Выберите валюту инвестирования:</p>
                                <div class="currency-group">
                                    <div class="currency-item">
                                        <input type="radio" name="currency-value" id="cur-1"><label for="cur-1"
                                            class="currency-title">Рубль</label>
                                    </div>
                                    <div class="currency-item">
                                        <input type="radio" name="currency-value" id="cur-2"><label for="cur-2"
                                            class="currency-title">Евро</label>
                                    </div>
                                    <div class="currency-item">
                                        <input type="radio" name="currency-value" id="cur-3"><label for="cur-3"
                                            class="currency-title">Доллар</label>
                                    </div>
                                </div>
                                <div class="currency-group">
                                    <div class="currency-item">
                                        <input type="radio" name="currency-value" id="cur-4"><label for="cur-4"
                                            class="currency-title">Тенге</label>
                                    </div>
                                    <div class="currency-item">
                                        <input type="radio" name="currency-value" id="cur-5"><label for="cur-5"
                                            class="currency-title">Биткоин</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 steps-item">
                                <p class="step-title">02. Введите сумму, которую хотите инвестировать:</p>
                                <div class="text-center">
                                    <input type="number" class="amount" min="10000" max="1000000" value="10000">

                                </div>
                                <div class="text-center">
                                    <input type="range" class="range-amount" min="10000" max="1000000" value="10000">
                                </div>
                            </div>
                            <div class="col-xl-5 col-xxl-3 steps-item">
                                <div class="total">
                                    <div class="total-parameter">
                                        <div class="title">Ваше ежедневное начисление составит:</div>
                                        <div class="value">8</div>
                                    </div>
                                    <div class="total-parameter">
                                        <div class="title">Общая сумма полученных вами средств:</div>
                                        <div class="value">3200</div>
                                    </div>
                                    <div class="total-parameter">
                                        <div class="title">Из них чистая прибыль:</div>
                                        <div class="value">2200</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
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
                                        <p class="description">Это базовый тариф. Он позволяет сделать первые шаги в инвестировании своих средств. Вне зависимости от знаний фондового рынка и правил трейдинга, Вы можете заработать на этом, так как Ваши деньги будут реинвестированы в брокерскую компанию Interactive Investor. </p>
                                        <p class="description">Interactive investor входит в десятку лучших брокерских фирм Соединенного королевства.  GDCinvest заключила договор с Interactive Investor, дающий гарантию заработка для наших инвесторов. Гибкая финансовая политика компании позволяет сделать минимальные инвестиции. </p>
                                        <p class="description">По истечению срока тарифа прибыль составит 70% к телу депозита</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 7000р до 70000р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 0.7% в день</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 5%</b></li>
                                            <li class="parameter-item"><b class="title">Распределённые инвестиции</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse2"
                                    aria-expanded="false" aria-controls="collapse2">
                                    ТАРИФ «Деньги в квадрате»
                                </button>


                                <div id="collapse2" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">При выборе данного тарифа компания реинвистирует Ваши деньги в микрофинансовый сектор экономики КНР. Это один из самых выгодных вариантов инвестирования (рост количества оформленных микрозаймов вырос на 64% по сравнению с 2017г)</p>
                                        <p class="description">По истечению срока тарифа прибыль составит 100% к телу депозита</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 100000р до 250000р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 1% в день</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Частные микрозаймы</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">
                                    ТАРИФ «На пол пути к миллиону»
                                </button>


                                <div id="collapse3" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">При выборе данного тарифа компания реинвистирует Ваши деньги в кредитование бизнеса и юридических лиц. Тариф был разработан в сотрудничестве с Industrial and Commercial Bank of China. Это крупнейший китайский коммерческий банк.</p>
                                        <p class="description">По истечению срока тарифа прибыль составит 150% к телу депозита</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до 300000р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Бизнес</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4">
                                    ТАРИФ «Расчетливый инвестор»
                                </button>


                                <div id="collapse4" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                       <p class="description">При выборе данного тарифа Ваши деньги будут реинвестированы в займы под залог имущества.</p>
                                        <p class="description">По истечению срока тарифа прибыль составит 170% к телу депозита</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до 300000р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 12%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в кредитование под залог</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse5"
                                    aria-expanded="false" aria-controls="collapse5">
                                    ТАРИФ «Крипто король»
                                </button>


                                <div id="collapse5" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">При выборе данного тарифа компания реинвистирует Ваши деньги в блокчейн технологии, BitcoinATM,  и трейдинг на криптобиржах. Тариф разработан в сотрудничестве с компанией General Bytes. </p>
                                        <p class="description">General Bytes – это компания по производству оборудования и программного обеспечения, связанного с биткоином, блокчейном и технологиями open source.</p>
                                        <p class="description">Заключенный между нами договор, позволяет равномерно распределить инвестиции между трейдингом и вложениями в оборудования General bytes. </p>
                                        <p class="description">По истечению срока тарифа прибыль составит 200% к телу депозита</p>

                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 0,5 ВТС на кабинет</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в майнинг криптовалют и трейдинг на криптобиржах</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse6"
                                    aria-expanded="false" aria-controls="collapse6">
                                    ТАРИФ «Миллионер за 100 дней»
                                </button>


                                <div id="collapse6" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">При выборе данного тарифа компания реинвестирует Ваши деньги в строительный сектор экономики КНР. Строительные займы считаются самыми крупными в сфере финансирования и кредитования.  Данный тариф разработан в сотрудничестве с China Communications Construction. Это бесспорный лидер на рынке строительства КНР и один из мировых лидеров в области проектирования и строительства портов.</p>
                                        <p class="description">По истечению срока тарифа прибыль составит 240% к телу депозита</p>

                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> от 300 000 р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 15%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Строительство</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                               
                                 
                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    ТАРИФ «Партнер»
                                </button>
                                 
                                
                                <div id="collapse17" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Это эксклюзивный тариф, который не требует от Вас абсолютно НИКАКИХ вложений, и позволяет заработать на сотрудничестве с GDCinvest. При привлечении нового инвестора для сотрудничества с нами, реферальная программа позволяет заработать до 15% от привлеченных инвестиций. Так же партнер получает от компании бонусные 100$.</p>
                                        <p class="description">Благодаря успешному анализу азиатского рынка компания GDCinvestсмогла предложить выгодные условия, как инвесторам, так и заемщикам. Мы заключили договора с компаниями, занимающими лидирующие позиции в ключевых отраслях экономики КНР. Такой подход позволяет нам предложить инвесторам различные инструменты заработка и возможность реинвестирования финансов в различные сферы экономики. Так же все инвестиции застрахованы China Pacific Insurance Company.</p>
                                        <p class="description">Совокупность всех факторов делает компанию GDCinvestуникальной платформойу которой нет достойных аналогов в мире. Мы можем гарантировать заработок и делаем это</p>

                                        
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="plan-category">ДОЛЛОРОВЫЕ ТАРИФЫ</div>
                        <div class="accordion-list">


                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse12"
                                    aria-expanded="false" aria-controls="collapse12">
                                    ТАРИФ «Деньги в квадрате»
                                </button>


                                <div id="collapse12" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 100000р до
                                                250000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 1% в день</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Частные
                                                    микрозаймы</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse13"
                                    aria-expanded="false" aria-controls="collapse13">
                                    ТАРИФ «На пол пути к миллиону»
                                </button>


                                <div id="collapse13" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до
                                                300000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Бизнес</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse14"
                                    aria-expanded="false" aria-controls="collapse14">
                                    ТАРИФ «Расчетливый инвестор»
                                </button>


                                <div id="collapse14" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до
                                                300000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 12%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в кредитование под
                                                    залог</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse15"
                                    aria-expanded="false" aria-controls="collapse15">
                                    ТАРИФ «Крипто король»
                                </button>


                                <div id="collapse15" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 0,5 ВТС на
                                                    кабинет</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в майнинг криптовалют
                                                    и трейдинг на криптобиржах</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse16"
                                    aria-expanded="false" aria-controls="collapse16">
                                    ТАРИФ «Миллионер за 100 дней»
                                </button>


                                <div id="collapse16" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> от 300 000 р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 15%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Строительство</b>
                                            </li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="plan-category">ТАРИФЫ ДЛЯ КИТАЯ</div>
                        <div class="accordion-list">


                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse7"
                                    aria-expanded="false" aria-controls="collapse7">
                                    ТАРИФ «Деньги в квадрате»
                                </button>


                                <div id="collapse7" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 100000р до
                                                250000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 1% в день</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Частные
                                                    микрозаймы</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse8"
                                    aria-expanded="false" aria-controls="collapse8">
                                    ТАРИФ «На пол пути к миллиону»
                                </button>


                                <div id="collapse8" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до
                                                300000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 15%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 10%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Бизнес</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse9"
                                    aria-expanded="false" aria-controls="collapse9">
                                    ТАРИФ «Расчетливый инвестор»
                                </button>


                                <div id="collapse9" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 200000р до
                                                300000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 17%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 12%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в кредитование под
                                                    залог</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse10"
                                    aria-expanded="false" aria-controls="collapse10">
                                    ТАРИФ «Крипто король»
                                </button>


                                <div id="collapse10" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> 1 BTC</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 0,5 ВТС на
                                                    кабинет</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в майнинг криптовалют
                                                    и трейдинг на криптобиржах</b></li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
                                </div>
                            </div>
                            <div class="card">


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse11"
                                    aria-expanded="false" aria-controls="collapse11">
                                    ТАРИФ «Миллионер за 100 дней»
                                </button>


                                <div id="collapse11" class="collapse" aria-labelledby="heading6"
                                    data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> от 300 000 р.</li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 2%</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 15%</b></li>
                                            <li class="parameter-item"><b class="title">Инвестиции в Строительство</b>
                                            </li>
                                        </ul>
                                        <div class="note">*Примечание касательно страховки</div>

                                        <a href="#accordion" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

                                    </div>
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
                <a href="#" class=" sponsors-item"><img src="img/pfmoney.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/payeer.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/comodo.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/qiwi.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/ddos.png" alt=""></a>
            </div>

        </div>
    </section>
    >
@endsection
