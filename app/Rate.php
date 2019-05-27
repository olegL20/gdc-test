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
        if (LaravelLocalization::setLocale() !== 'ru') {
            return '';
        }

        return $this->description;
    }

    public function getAmountForUSD()
    {
        return self::USD[$this->title];
    }
}
