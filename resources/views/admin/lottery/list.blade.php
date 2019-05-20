@extends('layouts.admin-layout')
@section('content')
    <div class="content-wrapper">
        <form action="{{route('admin.winner-create')}}">

            <div class="row">
                <div class="col-lg-12" style="justify-content: center">
                    <div class="row">
                        <div class="col-lg-2">
                            <label class="control-label" for=""> Время победы:
                            </label>
                            <input class="form-control" name="time" type="datetime-local">
                        </div>
                        <div class="col-lg-3">
                            <label class="control-label" for="">Победель:
                            </label>
                            <select name="user" class="form-control" id="">
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->getFullName()}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-2">
                            <label class="control-label" for="">Выиграш:
                            </label>
                            <input type="text" class="form-control" name="amount">
                        </div>
                        <div class="col-lg-2">
                            <input type="submit" class="btn btn-success" value="Создать">
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="rate-table table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Пользователь</th>
                <th scope="col">Время победы</th>
                <th scope="col">Сумма выиграша</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($winners as $winner)
                <tr>
                    <td>{{$winner->id}}</td>
                    <td>{{$winner->user->getFullName()}}</td>
                    <td>{{$winner->time}}</td>
                    <td>{{$winner->amount}}BTH</td>
                    <td><a href="{{route('admin.winner-delete', ['winner' => $winner])}}">Удалить</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@endsection
