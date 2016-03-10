<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hotels')->insert([
            'name' => 'Best Western 1',
            'location' => 'Jouy-en-Josas',
            'stars' => '4'
        ]);

        DB::table('hotels')->insert([
            'name' => 'Best Western 2',
            'location' => 'Paris',
            'stars' => '5'
        ]);

        DB::table('hotels')->insert([
            'name' => 'Best Western 3',
            'location' => 'Paris 2',
            'stars' => '3'
        ]);
    }
}
