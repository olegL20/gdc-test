@extends('layouts.admin-layout')
@section('content')
<section class="main-section" id="accordion">
    <div class="container">
        <ul class="nav nav-tabs" id="tab-menu" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="rate-tab" data-toggle="tab" href="#rate" role="tab" aria-controls="rate" aria-selected="true">Тарифы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">История транзакций</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="referal-tab" data-toggle="tab" href="#referal" role="tab" aria-controls="referal" aria-selected="false">Реферальная система</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="king-tab" data-toggle="tab" href="#king" role="tab" aria-controls="king" aria-selected="false">Крипто король</a>
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
                            <td>10.01.2019</th>
                            <td class="recharge">Пополнение баланса</td>
                            <td class="recharge">1500$</td>
                            <td>3000$</td>

                        </tr>
                        <tr>
                            <td>8.01.2019</th>
                            <td>Вывод средств</td>
                            <td>-500$</td>
                            <td>1000$</td>

                        </tr>
                        <tr>
                            <td>01.01.2019</th>
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
                        <p class="description">Делитесь реферальной ссылкой удобным способом и получайте бонусы за новых пользователей.</p>
                    </div>
                    <div class="referal-link">http://www.sample_site.com/index.php?ref=newuser=23</div>
                    <div class="referal-info">Количество приглашенных пользователей: <span class="number">11</span></div>
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
@endsection

