<div class="row users-data">
    <div class="col-12 col-md-7 user-item">
        <div class="users-info">
            <a href=""
                class="change-controller"><i class="fas fa-cog"></i><span>Change</span></a>
            <ul class="data-list static-list">
                <li class="list-item">
                    <i class="fas fa-user"></i><span>{{$user->getFullName()}}</span>
                </li>
                <li class="list-item">
                    <i class="fas fa-envelope"></i><span>{{$user->email}}</span>
                </li>
                <li class="list-item">
                    <i class="fas fa-address-card"></i><span>{{$user->address}}</span>
                </li>
            </ul>
            <form action="" class="change-form d-none">
                <ul class="data-list">
                    <li class="list-item">
                        <i class="fas fa-user"></i><input class="change-input user-name"
                            type="text"
                            value="Keven Feil">
                    </li>
                    <li class="list-item">
                        <i class="fas fa-envelope"></i><input class="change-input user-mail"
                            type="text"
                            value="sample_mail@gmail.com">
                    </li>
                    <li class="list-item">
                        <i class="fas fa-envelope"></i><input class="change-input user-password"
                            type="text"
                            value="password">
                    </li>
                </ul>
                <div class="button-group">
                    <button class="btn cancel">Отмена</button>
                    <button class="btn save">Сохранить</button>
                </div>
            </form>
        </div>

    </div>
    <div class="col-12 col-md-5 user-item">
        <div class="users-balance">
            <div class="balance-title">Баланс:</div>

            <div class="balance-value">{{$user->balance->getRealBalance()}} RUB</div>
            <button disabled class="get-cash disabled">Вывод средств</button>
            <a href="{{route('balance', ['user' => $user])}}" class="get-cash">Пополнить
                баланс</a>
        </div>

    </div>
</div>
