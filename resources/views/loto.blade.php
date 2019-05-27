<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>game</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/loto.css')}}">
</head>
<body>
<div class="roulette-page">
    @if ($winners->first() !== null)
        <h2 class="start-title">СТАРТ РУЛЕТКИ НАЧИНАЕТСЯ ПОСЛЕ ОКОНЧАНИЯ СЧЕТЧИКА:</h2>

        <div id="clock">
            <div class="hours">00</div>
            <div class="colon">:</div>
            <div class="minutes">00</div>
            <div class="colon">:</div>
            <div class="seconds">00</div>
        </div>
    @else
        <h2 class="start-title">РОЗЫГРЫШ НАЧНЕТСЯ В БЛИЖАЙШЕЕ ВРЕМЯ.</h2>
    @endif
    <p class="roulette-description">Наша рулетка работает по защищенной системе <strong>"Randomizer"</strong> <br> О ней
        вы можете узнать <a href="https://www.randomizer.org/" class="system-info">тут</a></p>
    <div class="main-block">
        <div class="roulette-block btc-block" id="popup-btc">
            <h2 class="title">КОЛИЧЕСТВО BTC ПОБЕДИТЕЛЯ:</h2>
            <div class="btc-name">BTC:
                <ul class="winners" style="display: none">
                    @foreach($winners as $winner)
                        <li>{{$winner->amount}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="roulette-container">
                <div class="main-roulette-array" id="rollBtc">
                    <div class="roulette-item">0.00321</div>
                    <div class="roulette-item">0.00235</div>
                    <div class="roulette-item">0.00241</div>
                    <div class="roulette-item">0.00333</div>
                    <div class="roulette-item">0.00333</div>
                    <div class="roulette-item">0.00329</div>
                    <div class="roulette-item">0.00238</div>
                    <div class="roulette-item">0.00247</div>
                    <div class="roulette-item">0.00336</div>
                    <div class="roulette-item">0.00330</div>
                    <div class="roulette-item">0.00330</div>

                </div>
                <div class="border-win"></div>
            </div>


        </div>

        <div class="roulette-block winner-block" id="popup-winner">
            <h2 class="title">ИМЯ И НОМЕР ПОБЕДИТЕЛЯ:</h2>
            <ul class="winners" style="display: none">
                @foreach($winners as $winner)
                    <li><h3>{{$winner->user->getFullName().' '.$winner->user->id}}</h3></li>
                @endforeach
            </ul>

            <div class="roulette-container">
                <div class="main-roulette-array" id="rollWinner">
                    <div class="roulette-item">#00992 <span class="line"></span> Пилипец Наташа</div>
                    <div class="roulette-item ">#00882 <span class="line"></span> Головач Игорь</div>
                    <div class="roulette-item">#00322 <span class="line"></span> Гулагова Ирина</div>
                    <div class="roulette-item">#00223 <span class="line"></span> Карпов Максим</div>
                    <div class="roulette-item">#00225 <span class="line"></span> Романов Роман</div>
                    <div class="roulette-item">#00221 <span class="line"></span> Петров Петр</div>
                    <div class="roulette-item">#00233 <span class="line"></span> Разгибов Али</div>
                    <div class="roulette-item">#00234 <span class="line"></span> Бабай Олег</div>
                    <div class="roulette-item">#00992 <span class="line"></span> Пилипец Наташа1</div>
                    <div class="roulette-item ">#00882 <span class="line"></span> Головач Игорь1</div>
                    <div class="roulette-item">#00322 <span class="line"></span> Гулагова Ирина1</div>
                    <div class="roulette-item">#00223 <span class="line"></span> Карпов Максим1</div>
                    <div class="roulette-item">#00225 <span class="line"></span> Романов Роман1</div>
                    <div class="roulette-item">#00221 <span class="line"></span> Петров Петр1</div>
                    <div class="roulette-item">#00233 <span class="line"></span> Разгибов Али1</div>
                    <div class="roulette-item">#00234 <span class="line"></span> Бабай Олег1</div>
                </div>
                <div class="border-win"></div>
            </div>
            <img src="{{asset('img/loto/1.png')}}" alt="" class="winner-image">


        </div>
    </div>


    <div class="sponsor">Sponsored by <a href="http://generalbytes.com" class="sponsor-link">generalbytes.com</a></div>
</div>

<!-- временный блок -->
{{--<form  class="get-parameters" style="position: absolute; width: 220px; height: 300px; padding: 20px 15px; top: 50%; left: 50%; margin-top: -150px; margin-left: -110px; background: #fff; font-size: 22px;">--}}
{{--    <div class="row">--}}
{{--        <label for="">дата и время</label>--}}
{{--        <br>--}}
{{--        <input type="text" class="" value="February 11 2019 14:30:00">--}}
{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <label for="">кол-во btc</label>--}}
{{--        <br>--}}
{{--        <select name="" id="">--}}
{{--            <option value="0.00241">0.00241</option>--}}
{{--            <option value="0.00329">0.00329</option>--}}

{{--        </select>--}}

{{--    </div>--}}
{{--    <div class="row">--}}
{{--        <label for="">победитель</label>--}}
{{--        <br>--}}
{{--        <select name="" id="">--}}
{{--            <option value="Головач Игорь">Головач Игорь</option>--}}
{{--            <option value="Карпов Максим">Карпов Максим</option>--}}

{{--        </select>--}}
{{--    </div>--}}
{{--    <button type="submit" class="submit" style="margin: 30px auto; padding: 5px 10px; font-size: 22px">ok</button>--}}
{{--</form>--}}
<!-- временный блок -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="{{asset('js/roulette.js')}}"></script>
<script src="{{asset('js/clock.js')}}"></script>
<script>
    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        return {
            total: t,
            hours: hours,
            minutes: minutes,
            seconds: seconds
        };
    }

    function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var hoursSpan = clock.querySelector(".hours");
        var minutesSpan = clock.querySelector(".minutes");
        var secondsSpan = clock.querySelector(".seconds");

        function updateClock() {
            var t = getTimeRemaining(endtime);


            if (t.total <= 0) {
                var winners = document.getElementsByClassName('winners');
                for (let i = 0; i < winners.length; i++) {
                    winners[i].style.display = 'block';
                }
                clearInterval(timeinterval);
                var deadline = new Date();
                initializeClock('clock', deadline);
            }

            hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
            minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
            secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
        }

        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
    }

    let endtime = new Date("{{$winners->first() !== null ? $winners->first()->time : null}}");
    initializeClock("clock", endtime);
</script>
</body>
</html>
