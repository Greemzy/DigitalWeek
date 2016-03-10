<?php

use Illuminate\Database\Seeder;

class ConversationsUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations_users')->insert([
            'user_id' => 1,
            'conv_id' => 1
        ]);
        DB::table('conversations_users')->insert([
            'user_id' => 2,
            'conv_id' => 1
        ]);
        
        DB::table('conversations_users')->insert([
            'user_id' => 3,
            'conv_id' => 2
        ]);
        
        DB::table('conversations_users')->insert([
            'user_id' => 2,
            'conv_id' => 2
        ]);
        
        DB::table('conversations_users')->insert([
            'user_id' => 1,
            'conv_id' => 3
        ]);
        
        DB::table('conversations_users')->insert([
            'user_id' => 3,
            'conv_id' => 3
        ]);
    }
}
