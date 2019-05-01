@extends('layouts.admin-layout')
@section('content')
    <div style="align-content: center">
        @include('layouts.sidebar')
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Имя</th>
            <th scope="col">Фамилия</th>
            <th scope="col">Адрес</th>
            <th scope="col">Email</th>
            <th scope="col">Подтвержден</th>
            <th scope="col">Cash-back</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <form action="{{route('admin.cashback', ['user'=>$user])}}" id="cashback-{{$user->id}}"></form>
            <form action="{{route('admin.verification_sent', ['user'=>$user])}}" id="sent-{{$user->id}}"></form>
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <span class="badge-{{$user->isVerified() ? 'success' : 'danger'}}">{{$user->isVerified() ? 'Подтвержден' : 'Отказано'}}</span>
                </td>
                <td>
                    <input form="cashback-{{$user->id}}" type="text"
                           name="value"
                           value="{{$user->cashback ? $user->cashback->value : 0}}"
                           required>
                </td>
                <td>
                    <ul>
                        <li><input class="btn btn-dark" type="submit" form="cashback-{{$user->id}}"
                                   value="Изменить Кеш-бек"></li>
                        @if(!$user->isVerified())
                            <li><input class="btn btn-success" type="submit" name="verify" form="sent-{{$user->id}}"
                                       value="Верифицировать"></li>
                            @else
                            <li><input class="btn btn-danger" name="decline" type="submit" form="sent-{{$user->id}}"
                                    value="Отказать"></li>
                        @endif
                    </ul>


                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
