@extends('layouts.admin-layout')
@section('content')
    @foreach($rates as $rate)
        {{$rate->title}}
    @endforeach
@endsection
