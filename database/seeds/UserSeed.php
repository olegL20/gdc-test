<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 1,
                'login' => 'admin',
                'email' => 'admin@admin.com',
                'skype' => 'admin@admin.com',
                'payeer' => 'admin@admin.com',
                'perfectMoney' => 'admin@admin.com',
                'password' => '$2y$10$HAZjX8KtA5ddJwsGe8SuI.7edxxLy0ciM.gGIUvPQzdiJQvE0UoTy',
                'role_id' => 1,
                'remember_token' => '',

            ],
            [
                'id' => 2,
                'login' => 'user',
                'email' => 'user@admin.com',
                'skype' => 'user@user.com',
                'payeer' => 'user@user.com',
                'perfectMoney' => 'user@user.com',
                'password' => '$2y$10$HAZjX8KtA5ddJwsGe8SuI.7edxxLy0ciM.gGIUvPQzdiJQvE0UoTy',
                'role_id' => 2,
                'remember_token' => '',

            ],
        ];

        foreach ($items as $item) {
            User::create($item);
        }
    }
}
