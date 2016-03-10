<?php

use Illuminate\Database\Seeder;

class ConversationsMessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conversations_messages')->insert([
            'user_id' => 1,
            'conv_id' => 1,
            'content' => 'Bonjour à vous comment ça va?',
            'read' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('conversations_messages')->insert([
            'user_id' => 2,
            'conv_id' => 1,
            'content' => 'Moi ça va et vous?',
            'read' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('conversations_messages')->insert([
            'user_id' => 1,
            'conv_id' => 1,
            'content' => 'Très bien merci, que faites vous aujourd\'hui?',
            'read' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('conversations_messages')->insert([
            'user_id' => 2,
            'conv_id' => 2,
            'content' => 'Bonsoir, je vais au spa ce soir, voulez-vous m\'accompagner?',
            'read' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('conversations_messages')->insert([
            'user_id' => 1,
            'conv_id' => 3,
            'content' => 'Bonjour, belle journée n\'est-ce pas?',
            'read' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
            
        DB::table('conversations_messages')->insert([
            'user_id' => 3,
            'conv_id' => 3,
            'content' => 'Oui',
            'read' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('conversations_messages')->insert([
            'user_id' => 1,
            'conv_id' => 3,
            'content' => 'Que diriez vous de faire un petit plongeon dans la piscine?',
            'read' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
