@extends('layouts.app')
@section('content')
    <section class="light-gradient clip-section"></section>
    <section class="light-gradient  main-section">
        <div class="container">
            <div class="main-block">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-xl-6 col-xxl-4 form-item">
                            <h1 style="text-align: center; font-size: 3em;margin-bottom: 50px;"><strong>Контакты</strong></h1>
                            <p style="justify-content: center;font-size: 20px;margin-bottom: 15px;">Вы можете связаться с нами любым удобным для вас способом.
                                Наши телефоны многоканальные.
                            </p>
                            <h1 style="    font-size: 1.5em;    font-style: oblique;">Гарячая линия:</h1>
                                <p style="margin-bottom: 10px; margin-top:15px;font-size: 1.2em;">+85258010932</p>
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+85258080723</p>
                                <p style="margin-bottom: 10px; font-size: 1.2em;">+74951080929</p>
                        </div>
                        <div class="col-xl-6 col-xxl-8">
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
                            <div class="col-xl-12 col-xxl-4 form-item">
                                <label for="" class="field-name">Ваше сообщение:*</label>
                                <textarea class="field-value" placeholder="Введите ваше сообщение"></textarea>
                            </div>
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
