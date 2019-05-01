@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <form id="balance" action="{{route('balance', ['user' => request()->user()])}}"></form>
                <input form="balance" type="submit" value="Пополнить баланс" class="btn btn-primary">
                @if($link)
                    Your referral link is {{route('referral', ['code' => $link] )}}
                @endif
            </div>
        </div>
    </section>
@endsection
