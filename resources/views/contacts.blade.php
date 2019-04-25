@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">

                <form class="contact-form">
                    <div class="row">
                        <div class="col-xl-12 col-xxl-8">
                            <div class="row">
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">Ваше имя:*</label>
                                    <input type="text" class="field-value" placeholder="Введите ваше имя">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">Ваш номер:*</label>
                                    <input type="text" class="field-value" placeholder="Введите ваш номер">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">Вашу почту:*</label>
                                    <input type="text" class="field-value" placeholder="Введите вашу почту">
                                </div>
                                <div class="col-xl-6 form-item">
                                    <label for="" class="field-name">Тема сообщения:*</label>
                                    <input type="text" class="field-value" placeholder="Введите тему сообщения">
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-12 col-xxl-4 form-item">
                            <label for="" class="field-name">Ваше сообщение:*</label>
                            <textarea class="field-value" placeholder="Введите ваше сообщение"></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="submit">ОТПРАВИТЬ</button>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section class="light-gradient sponsors">
        <div class="container">
            <div class=" sponsors-list">
                <a href="#" class=" sponsors-item"><img src="img/pfmoney.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/payeer.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/comodo.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/qiwi.png" alt=""></a>
                <a href="#" class=" sponsors-item"><img src="img/ddos.png" alt=""></a>
            </div>

        </div>
    </section>
@endsection