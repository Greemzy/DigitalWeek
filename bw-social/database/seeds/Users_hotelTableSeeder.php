<?php

use Illuminate\Database\Seeder;

class Users_hotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_hotel')->insert([
            'id_hotel' => '1',
            'id_user' => '1'
        ]);

        DB::table('users_hotel')->insert([
            'id_hotel' => '1',
            'id_user' => '2'
        ]);
    }
}
