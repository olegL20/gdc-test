<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Rate extends Model
{

    const USD = [
        'Старт' => 100,
        'Деньги в квадрате' => 1500,
        'На пол пути к миллиону' => 2000,
        'Расчётливый инвестор' => 3000,
        'Миллионер за 100 дней' => 3500,
        'Партнер' => 'Партнер',
    ];
    const UAN = [
        'Старт' => 700,
        'Деньги в квадрате' => 10500,
        'На пол пути к миллиону' => 14000,
        'Расчётливый инвестор' => 21000,
        'Миллионер за 100 дней' => 24000,
        'Партнер' => 'Партнер',
    ];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function getTitle(): string
    {
        return __('rates.titles.'.$this->title);
    }

    public function getDescription(): string
    {
        if (LaravelLocalization::getCurrentLocale() !== 'ru') {
            return '';
        }

        if ($this->title === 'Партнер') {
            return 'Это эксклюзивный тариф, который не требует от Вас абсолютно НИКАКИХ вложений, и позволяет заработать на сотрудничестве с GDCinvest. При привлечении нового инвестора для сотрудничества с нами, реферальная программа позволяет заработать до 15% от привлеченных инвестиций. Так же партнер получает от компании бонусные 100$.';
        }
        return $this->description;
    }

    public function getAmountForUSD()
    {
        return self::USD[$this->title];
    }

    public function getAmountForUAN()
    {
        return self::UAN[$this->title];
    }

    public function getMinAmount()
    {
        if (LaravelLocalization::getCurrentLocale() === 'ru') {
            return $this->min_amount.' RUB';
        } elseif (LaravelLocalization::getCurrentLocale() === 'en') {
            return $this->getAmountForUSD().' USD';
        } else {
            return $this->getAmountForUAN().' CNY';
        }
    }
}
