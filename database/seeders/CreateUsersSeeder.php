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
                'name'=>'Administrativo',
                'email'=>'administrativo@email.com',
                'type'=>0,
                'cpf'=>'12345678901',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'Gestor',
                'email'=>'gestor@email.com',
                'type'=>1,
                'cpf'=>'12345678903',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
