<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Balance;

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
                'verified' => true,
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
                'verified' => false,
            ],
        ];

        foreach ($items as $item) {
            $user = new User();
            $user->name = $item['name'];
            $user->surname = $item['surname'];
            $user->address = $item['address'];
            $user->email = $item['email'];
            $user->password = $item['password'];
            $user->role_id = $item['role_id'];
            $user->verified = $item['verified'];
            $user->remember_token ='';
            $user->save();
            $balance = new Balance();
            $balance->user_id = $user->id;
            $balance->save();
        }
    }
}
