@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">

                <div class="main-container" id="accordion">
                    <h2 class="partners-title">Реферальная программа разработанная компанией GDCinvest </h2>
                    <div class="partners-text">


                        <p class="paragraph">Это специальное деловое предложение для наших партнеров. После прохождения
                            процедуры регистрации на сайте компании, каждый пользователь может стать партнером и
                            автоматически получит возможность привлекать новых инвесторов для сотрудничества с
                            CompanyName.</p>
                        <p class="paragraph">Реферальная программа позволяет партнерам зарабатывать прибыль в размере
                            12% от суммы депозита, который внес Ваш реферал на свой личный счет для дальнейшего
                            инвестирования.</p>
                    </div>
                    <h3 class="rate-title">Данный тарифный план предназначен для предпринимателей реферальной
                        программы:</h3>
                    <div class="accordion-list">
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

                                    <a href="{{route('calculator')}}" class="calculate">РАССЧИТАТЬ ПРИБЫЛЬ</a>

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
@endsection
