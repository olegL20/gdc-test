@extends('layouts.admin-layout')
@section('content')
    <section class="main-section" id="accordion">
        <div class="container">
            <div class="table-responsive">
                <table class="rate-table table">
                    <thead>
                    <tr>
                        <th scope="col">Дата</th>
                        <th scope="col">Транзакция</th>
                        <th scope="col">Сумма</th>
                        <th scope="col">Остаток</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction->created_at}}</td>
                            <td @if (!in_array('INVEST', explode(' ',$transaction->type)) &&
                                                 !in_array('PULL', explode(' ',$transaction->type))) class="recharge" @endif>{{$transaction->type}}</td>
                            <td @if (!in_array('INVEST', explode(' ',$transaction->type)) &&
                                                 !in_array('PULL', explode(' ',$transaction->type))) class="recharge" @endif>{{$transaction->amount}}</td>
                            <td>{{$transaction->balance}}</td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
