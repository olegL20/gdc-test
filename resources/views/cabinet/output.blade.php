@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <section class="admin-section" id="accordion">
                    <div class="container">
                        @include('cabinet.user-info', ['user' => $user])
                        <div class="container">
                            <div style=" margin-top:50px"
                                class="mainbox col-md-12 col-md-offset-3 col-sm-12 col-sm-offset-2">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title" style="font-size: 3em; text-align: center">Вывод средств
                                        </div>
                                    </div>
                                    <div class="panel-body">
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
