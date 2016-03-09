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
            'user_id' => 1,
            'type_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Le Louvre',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,30,0),
            'location' => 'Paris',
            'description' => 'De passage aux alentours de Paris, je compte visiter le musee du Louvre, vous pouvez vous joindre a moi si vous le souhaitez.',
            'hotel_id' => 2,
            'user_id' => 1,
            'type_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ne passez pas la soiree tout seul',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,0,0),
            'location' => 'Salle de detente',
            'description' => 'Vous vous ennuyez le soir ? Rejoignez moi pour discuter, je suis ouvert a tous les sujets',
            'hotel_id' => 2,
            'user_id' => 2,
            'type_id' => 4
        ]);
    }
}
