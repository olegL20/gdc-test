<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'Admin',],
            ['id' => 2, 'title' => 'User',],

        ];

        foreach ($items as $item) {
            Role::create($item);
        }
    }
}
