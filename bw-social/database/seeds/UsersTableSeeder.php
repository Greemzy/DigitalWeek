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
            'name' => 'Michau',
            'email' => 'user1@hotmail.fr',
            'firstname' => 'Julian',
            'password' => bcrypt('User1'),
            'age' => \Carbon\Carbon::create(1989,5,20),
            'id_hotel' => '1',
            'role' => 'user',
            'rank' => 'Blue',
            'image'=>'julian.png'
        ]);

        DB::table('users')->insert([
            'name' => 'Sageot',
            'email' => 'user2@hotmail.fr',
            'firstname' => 'Maxime',
            'role' => 'admin',
            'password' => bcrypt('User2'),
            'age' => \Carbon\Carbon::create(1989,5,20),
            'id_hotel' => '1',
            'rank' => 'Diamond',
            'image'=>'maxime.png'
        ]);
        
        
        
        DB::table('users')->insert([
            'name' => 'Parrot',
            'email' => 'paulparrot23@gmail.com',
            'firstname' => 'Paul',
            'password' => bcrypt('321321'),
            'age' => \Carbon\Carbon::create(1955,6,25),
            'id_hotel' => '1',
            'role' => 'user',
            'rank' => 'Diamond',
            'image'=>'paul.png'
        ]);

        DB::table('users')->insert([
            'name' => 'Brousse',
            'email' => 'jeanbrousse@hotmail.fr',
            'firstname' => 'morgan',
            'password' => bcrypt('321321'),
            'age' => \Carbon\Carbon::create(1978,3,12),
            'id_hotel' => '1',
            'role' => 'user',
            'rank' => 'Gold',
            'image'=>'Morgan.png'
        ]);
    }
}
