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
                                        <p class="description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                            sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
                                            erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea
                                            rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                                            dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                            diam.</p>
                                        <ul class="parameter-list">
                                            <li class="parameter-item"><b class="title">Депозит:</b> От 7000р до 70000р.
                                            </li>
                                            <li class="parameter-item"><b class="title">Ставка:</b> 0.6% в день</li>
                                            <li class="parameter-item"><b class="title">Период:</b> 100 дней</li>
                                            <li class="parameter-item"><b class="title">Рефовод получает 5%</b></li>
                                            <li class="parameter-item"><b class="title">Распределённые инвестиции</b>
                                            </li>
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


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse3"
                                    aria-expanded="false" aria-controls="collapse3">
                                    ТАРИФ «На пол пути к миллиону»
                                </button>


                                <div id="collapse3" class="collapse" aria-labelledby="headingTwo"
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


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse4"
                                    aria-expanded="false" aria-controls="collapse4">
                                    ТАРИФ «Расчетливый инвестор»
                                </button>


                                <div id="collapse4" class="collapse" aria-labelledby="headingTwo"
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


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse5"
                                    aria-expanded="false" aria-controls="collapse5">
                                    ТАРИФ «Крипто король»
                                </button>


                                <div id="collapse5" class="collapse" aria-labelledby="headingTwo"
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


                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse6"
                                    aria-expanded="false" aria-controls="collapse6">
                                    ТАРИФ «Миллионер за 100 дней»
                                </button>


                                <div id="collapse6" class="collapse" aria-labelledby="heading6"
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
