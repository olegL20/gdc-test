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
                                        <div class="panel-title" style="font-size: 3em; text-align: center">Пополнение
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-bordered payeer-form">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <input class="form-control" placeholder="Amount" type="text" name="m_amount">
                                                    </div>
                                                    <div class="col-md-4">
                                                        <select class="form-control" name="m_curr" id="">
                                                            <option value="USD">USD</option>
                                                            <option value="RUB">RUB</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input type="submit" class="btn btn-primary" name="m_process" value="Send" />
                                                    </div>
                                                </div>

                                            </form>
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
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="{{asset('js/payeer.js')}}"></script>
@endsection
