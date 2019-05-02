@extends('layouts.app')
@section('content')
    
    <section class="heading">
        <div class="container">
            <div class="heading-text">
                <h1 class="heading-title">
                    ПАРТНЕРАМ
                </h1>
                
                <div class="users-block">
                    <a href="" class="btn register">РЕГИСТРАЦИЯ</a>
                    <a href="" class="btn login">АВТОРИЗАЦИЯ</a>
                </div>
            </div>

        </div>
    </section>
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
                               
                                 
                                <button class="btn-collapse collapsed " data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    ТАРИФ «Партнер»
                                </button>
                                 
                                
                                <div id="collapse17" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
                                    <div class="card-body">
                                        <p class="description">Это эксклюзивный тариф, который не требует от Вас абсолютно НИКАКИХ вложений, и позволяет заработать на сотрудничестве с GDCinvest. При привлечении нового инвестора для сотрудничества с нами, реферальная программа позволяет заработать до 15% от привлеченных инвестиций. Так же партнер получает от компании бонусные 100$.</p>
                                        <p class="description">Благодаря успешному анализу азиатского рынка компания GDCinvestсмогла предложить выгодные условия, как инвесторам, так и заемщикам. Мы заключили договора с компаниями, занимающими лидирующие позиции в ключевых отраслях экономики КНР. Такой подход позволяет нам предложить инвесторам различные инструменты заработка и возможность реинвестирования финансов в различные сферы экономики. Так же все инвестиции застрахованы China Pacific Insurance Company.</p>
                                        <p class="description">Совокупность всех факторов делает компанию GDCinvestуникальной платформойу которой нет достойных аналогов в мире. Мы можем гарантировать заработок и делаем это</p>

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
