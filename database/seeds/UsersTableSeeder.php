<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();

        $user = [
            ['name' => 'Daniel de Brito Frota', 'email'  => 'danielfrot@gmail.com', 'password'  => bcrypt('123456'),],
            ['name' => 'Michel Mesquita', 'email'  => 'mix@gmail.com', 'password'  => bcrypt('123456'),],
            ['name' => 'Tatiane Nogueira', 'email'  => 'tatiane@gmail.com', 'password'  => bcrypt('123456'),],
            ['name' => 'Tatiele', 'email'  => 'tatiele@gmail.com', 'password'  => bcrypt('123456'),],
            ['name' => 'Tayla', 'email'  => 'tayla@gmail.com', 'password'  => bcrypt('123456'),],
        ];

        DB::table('users')->insert($user);
    }
}
