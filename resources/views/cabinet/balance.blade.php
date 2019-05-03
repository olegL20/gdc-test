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
                                    <button class="get-cash">Вывод средств</button>
                                    <a href="{{route('balance', ['user' => $user])}}" class="get-cash">Пополнить
                                        баланс</a>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div style=" margin-top:50px"
                                class="mainbox col-md-12 col-md-offset-3 col-sm-12 col-sm-offset-2">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title" style="font-size: 3em; text-align: center">Пополнение
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @php
                                            echo $form->open(['class' => 'skrill-form']);
                                            $exclude = ['amount', 'currency'];
                                            echo $form->renderHidden($exclude);
                                        @endphp
                                        <div class="row">
                                            <div class="form-group required col-sm-4">
                                                <label for="amount" class="control-label">Сумма</label>
                                                <input type="number"
                                                    id="amount"
                                                    name="amount"
                                                    class="form-control required"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group required col-sm-4">
                                                <label for="currency" class="control-label">Валюта</label>
                                                <select class="form-control required" name="currency" id="currency">
                                                    <option value="USD">USD</option>
                                                    <option value="EUR">EUR</option>
                                                    <option value="RUB">RUB</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group required col-sm-4">
                                                <input class="form-control btn" type="submit" value="QIWI" disabled="disabled">
                                            </div>
                                            <div class="form-group required col-sm-4">
                                                <input type="submit"
                                                    value="Yandex.Money"
                                                    disabled="disabled"
                                                    class="form-control btn">
                                            </div>
                                            <div class="form-group required col-sm-4">
                                                @php
                                                    echo $form->renderSubmit('Кредитная карта', ['class' => 'btn btn-primary form-control']);
                                                @endphp
                                            </div>
                                            @php
                                                echo $form->close();
                                            @endphp
                                        </div>
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
