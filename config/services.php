<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => 'sandboxbe4bf7a239cb45b69f6af3caa0cc0a1c.mailgun.org',
        'secret' => 'key-fffa409863da7597a697b0d3202c6a7a',
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'key' => env('pk_test_uc1mZPK56t3OucNzQi5uESds00hiEimBHa'),
        'secret' => env('sk_test_QijaUGnWvCYwDazRrBeqeERr006qiz34pL'),
    ],

];
