<?php

return [
     'mysql' => [
            'driver' => 'mysql',
            'host' => 'eu-cdbr-west-02.cleardb.net/heroku_23deb2e74a6b970?reconnect=true',
            'port' => env('DB_PORT', '3306'),
            'database' => 'heroku_23deb2e74a6b970',
            'username' => 'b0e16c3171f2c4',
            'password' => 'eb8e2881',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ],

    'migrations' => 'migrations',
];
