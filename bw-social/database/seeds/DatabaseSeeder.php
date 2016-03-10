<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        //$this->call(Users_hotelTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
    }
}
