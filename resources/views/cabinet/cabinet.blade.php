@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
    @if($link)
        Your referral link is {{route('referral', ['code' => $link] )}}
    @endif
            </div>
        </div>
    </section>
@endsection