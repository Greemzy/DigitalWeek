<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activities')->insert([
            'name' => 'Partie de golf',
            'date_activity' => \Carbon\Carbon::create(2016,04,24,9,0,0),
            'location' => '13 Rue de Midori, Jouy-en-Josas',
            'description' => 'Venez vous joindre à moi pour une petite partie de golf, c\'est cadeau!',
            'hotel_id' => 1,
            'user_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Partie de tennis',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,30,0),
            'location' => 'Rue Victor Hugo, Jouy-en-Josas',
            'description' => 'Je recherche 1 ou 3 personnes pour faire du tennis, par contre je n\'ai pas de raquettes pour vous.',
            'hotel_id' => 2,
            'user_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Randonnée',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,0,0),
            'location' => 'Rue Victor Hugo, Jouy-en-Josas',
            'description' => 'Je recherche 1 ou 3 personnes pour faire du tennis, par contre je n\'ai pas de raquettes pour vous.',
            'hotel_id' => 2,
            'user_id' => 1
        ]);
    }
}
