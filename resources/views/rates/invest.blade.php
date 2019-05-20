@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <section class="admin-section" id="accordion">
                    <div class="container">
                        @include('cabinet.user-info', ['user' => $user])
                    </div>
                </section>
                <div class="row">
                    <div class="col-lg-10">
                        <form action="{{route('start_invest', ['rate' => $rate])}}">
                            <div class="row center-block" style="justify-content: center">
                                <div class="col-lg-4">
                                    @if($errors->has('amount'))
                                        <p style="color: red; font-size: 1em; text-align: center">{{$errors->get('amount')[0]}}</p>
                                    @endif
                                </div>
                            </div>
                            <div class="row center-block" style="justify-content: center">
                                <div class="col-lg-4">
                                    <label for="">Введите сумму инвестиций</label>
                                    <input class="form-control"
                                        type="number"
                                        name="amount"
                                        min="{{$rate->min_amount}}"
                                        max="{{request()->user()->balance->value}}">
                                </div>
                            </div>
                            <div class="row" style="justify-content: center; margin-top: 10px">
                                <div class="col-lg-4">
                                    <input class="btn-primary btn" type="submit" value="Инвестировать">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>
@endsection
