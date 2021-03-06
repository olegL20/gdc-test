<?php

use App\Rate;
use Illuminate\Database\Seeder;

class RateSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rate::create([
            'title' => 'Старт',
            'description' => 'Это базовый тариф. Он позволяет сделать первые шаги в инвестировании своих средств. Вне зависимости от знаний фондового рынка и правил трейдинга, Вы можете заработать на этом, так как Ваши деньги будут реинвестированы в брокерскую компанию Interactive Investor.

Interactive investor входит в десятку лучших брокерских фирм Соединенного королевства. GDC Invest заключила договор с Interactive Investor, дающий гарантию заработка для наших инвесторов. Гибкая финансовая политика компании позволяет сделать минимальные инвестиции.

По истечению срока тарифа прибыль составит 70% к телу депозита',
            'percent_per_day' => 0.7,
            'days' => 100,
            'referral_percent' => 0,
            'min_amount' => 70000,
            'currency' => 'RUB',
        ]);
        Rate::create([
            'title' => 'Деньги в квадрате',
            'description' => 'При выборе данного тарифа компания реинвистирует Ваши деньги в микрофинансовый сектор экономики КНР. Это один из самых выгодных вариантов инвестирования (рост количества оформленных микрозаймов вырос на 64% по сравнению с 2017г)

По истечению срока тарифа прибыль составит 100% к телу депозита',
            'percent_per_day' => 1,
            'days' => 100,
            'referral_percent' => 10,
            'min_amount' => 100000,
            'currency' => 'RUB',
        ]);
        Rate::create([
            'title' => 'На пол пути к миллиону',
            'description' => 'При выборе данного тарифа компания реинвистирует Ваши деньги в кредитование бизнеса и юридических лиц. Тариф был разработан в сотрудничестве с Industrial and Commercial Bank of China. Это крупнейший китайский коммерческий банк.

По истечению срока тарифа прибыль составит 150% к телу депозита',
            'percent_per_day' => 1.5,
            'days' => 100,
            'referral_percent' => 10,
            'min_amount' => 200000,
            'currency' => 'RUB',
        ]);
        Rate::create([
            'title' => 'Расчётливый инвестор',
            'description' => 'При выборе данного тарифа Ваши деньги будут реинвестированы в займы под залог имущества.

По истечению срока тарифа прибыль составит 170% к телу депозита',
            'percent_per_day' => 1.7,
            'days' => 100,
            'referral_percent' => 12,
            'min_amount' => 250000,
            'currency' => 'RUB',
        ]);
        Rate::create([
            'title' => 'Миллионер за 100 дней',
            'description' => 'При выборе данного тарифа компания реинвестирует Ваши деньги в строительный сектор экономики КНР. Строительные займы считаются самыми крупными в сфере финансирования и кредитования. Данный тариф разработан в сотрудничестве с China Communications Construction. Это бесспорный лидер на рынке строительства КНР и один из мировых лидеров в области проектирования и строительства портов.

По истечению срока тарифа прибыль составит 240% к телу депозита',
            'percent_per_day' => 2.4,
            'days' => 100,
            'referral_percent' => 15,
            'min_amount' => 300000,
            'currency' => 'RUB',
        ]);
        Rate::create([
            'title' => 'Партнер',
            'description' => 'Это эксклюзивный тариф, который не требует от Вас абсолютно НИКАКИХ вложений, и позволяет заработать на сотрудничестве с GDCinvest. При привлечении нового инвестора для сотрудничества с нами, реферальная программа позволяет заработать до 15% от привлеченных инвестиций. Так же партнер получает от компании бонусные 100$.

Благодаря успешному анализу азиатского рынка компания GDC Invest смогла предложить выгодные условия, как инвесторам, так и заемщикам. Мы заключили договора с компаниями, занимающими лидирующие позиции в ключевых отраслях экономики КНР. Такой подход позволяет нам предложить инвесторам различные инструменты заработка и возможность реинвестирования финансов в различные сферы экономики. Так же все инвестиции застрахованы China Pacific Insurance Company.

Совокупность всех факторов делает компанию GDC Invest уникальной платформойу которой нет достойных аналогов в мире. Мы можем гарантировать заработок и делаем это',
            'percent_per_day' => 0,
            'days' => 0,
            'referral_percent' => 0,
            'min_amount' => 0,
            'currency' => 'RUB',
        ]);
    }

}
