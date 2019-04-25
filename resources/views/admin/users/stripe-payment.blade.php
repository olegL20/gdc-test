@extends('layouts.admin-layout')
@section('content')
    <div style="align-content: center">
        @include('layouts.sidebar')
    </div>
    Для верификации Вам необходимо оплатить 5$
    <form action="{{route('admin.verify_user', ['user' => $user])}}">
        <input type="text" name="card_number">
        <input type="text" name="year">
        <input type="text" name="month">
        <input type="text" name="cvv">
        <input type="submit" name="">
    </form>
@endsection