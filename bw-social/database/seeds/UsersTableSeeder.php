<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'sageot.m@hotmail.fr',
            'password' => bcrypt('User1'),
            'age' => \Carbon\Carbon::create(1989,5,20),
            'rank' => 'Blue'
        ]);

        DB::table('users')->insert([
            'name' => 'User2',
            'email' => 'sageot.m@hotmail.fr',
            'password' => bcrypt('User2'),
            'age' => \Carbon\Carbon::create(1989,5,20),
            'rank' => 'Diamond'
        ]);
    }
}
