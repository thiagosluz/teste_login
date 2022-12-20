<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name'=>'User',
                'email'=>'user@websolutionstuff.com',
                'type'=>0,
                'cpf'=>'12345678901',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Super Admin',
                'email'=>'super-admin@websolutionstuff.com',
                'type'=>1,
                'cpf'=>'12345678903',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Manager',
                'email'=>'manager@websolutionstuff.com',
                'type'=> 2,
                'cpf'=>'12345678902',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
