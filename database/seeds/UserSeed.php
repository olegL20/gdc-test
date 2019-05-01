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
                'name' => 'Admin',
                'surname' => 'Admin',
                'address' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => '$2y$10$HAZjX8KtA5ddJwsGe8SuI.7edxxLy0ciM.gGIUvPQzdiJQvE0UoTy',
                'role_id' => 1,
                'remember_token' => '',

            ],
            [
                'id' => 2,
                'name' => 'User',
                'surname' => 'User',
                'address' => 'User',
                'email' => 'user@gmail.com',
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
