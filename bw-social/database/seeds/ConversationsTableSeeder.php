<?php

use Illuminate\Database\Seeder;

class ConversationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations')->insert([
            'id' => '1'
        ]);
        
        DB::table('conversations')->insert([
            'id' => '2'
        ]);
        
        DB::table('conversations')->insert([
            'id' => '3'
        ]);
    }
}
