@extends('layouts.admin-layout')
@section('content')
    <section class="main-section" id="accordion">
        <div class="container">
            <ul class="nav nav-tabs" id="tab-menu" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active"
                        id="rate-tab"
                        data-toggle="tab"
                        href="#history"
                        role="tab"
                        aria-controls="history"
                        aria-selected="true">Подтвержденные</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        id="history-tab"
                        data-toggle="tab"
                        href="#rate"
                        role="tab"
                        aria-controls="rate"
                        aria-selected="false">Заявки <span class="badge-primary">({{count($unverifiedUsers)}})</span></a>
                </li>
            </ul>
            <div class="tab-content" id="tab-content">
                <div class="tab-pane fade" id="rate" role="tabpanel" aria-labelledby="rate-tab">
                    <div class="table-responsive">
                        <table class="rate-table">
                            <thead>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Аддресс</th>
                                <th scope="col">Email</th>
                                <th scope="col">Дата регистрации</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if ($unverifiedUsers)
                                @foreach($unverifiedUsers as $unverified)
                                    <tr>
                                        <td>{{$unverified->name}}</td>
                                        <td>{{$unverified->surname}}</td>
                                        <td>{{$unverified->address}}</td>
                                        <td>{{$unverified->email}}</td>
                                        <td>{{$unverified->created_at}}</td>
                                        <td>
                                            <ul>
                                                <form action="{{route('admin.verification_sent', ['user'=>$unverified])}}"
                                                    id="sent-{{$unverified->id}}"></form>
                                                <li><input class="btn btn-success"
                                                        type="submit"
                                                        name="verify"
                                                        form="sent-{{$unverified->id}}"
                                                        value="Верифицировать"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if (count($unverifiedUsers) === 0)
                            <div class="no-result">
                                На данный момент у вас нету активных заявок
                            </div>
                        @endif
                    </div>
                </div>
                <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
                    <div class="table-responsive">
                        <table class="rate-table">
                            <thead>
                            <tr>
                            <tr>
                                <th scope="col">Имя</th>
                                <th scope="col">Фамилия</th>
                                <th scope="col">Аддресс</th>
                                <th scope="col">Email</th>
                                <th scope="col">Дата регистрации</th>
                                <th scope="col">Кеш-бек</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($verifiedUsers as $verified)
                                @if (!$verified->isAdmin())
                                    <form action="{{route('admin.cashback', ['user'=>$verified])}}"
                                        id="cashback-{{$verified->id}}"></form>
                                    <tr>
                                        <td>{{$verified->name}}</td>
                                        <td>{{$verified->surname}}</td>
                                        <td>{{$verified->address}}</td>
                                        <td>{{$verified->email}}</td>
                                        <td>{{$verified->created_at}}</td>
                                        <td>
                                            <input form="cashback-{{$verified->id}}" type="text"
                                                name="value"
                                                value="{{$verified->cashback ? $verified->cashback->value : 0}}"
                                                required
                                                class="form-control">
                                        </td>
                                        <td>
                                            <ul>

                                                <li><input class="btn btn-dark"
                                                        type="submit"
                                                        form="cashback-{{$verified->id}}"
                                                        value="Изменить Кеш-бек"></li>

                                            </ul>


                                        </td>
                                    </tr>

                                @endif
                            @endforeach
                            </tbody>
                        </table>
                        <div class="no-result d-none">
                            На данный момент у вас нету активных тарифных планов
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
