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
            'description' => 'Le golf est un sport de précision se jouant en plein air, qui consiste à envoyer une balle dans un trou à l\'aide de clubs. Le but du jeu consiste à effectuer, sur un parcours défini, le moins de coups possible. Précision, endurance, technicité.',
            'hotel_id' => 1,
            'user_id' => 1,
            'type_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Le Louvre',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,30,0),
            'location' => 'Paris',
            'description' => 'Le musée du Louvre est un musée d\'art et d\'antiquités situé au centre de Paris dans le palais du Louvre. C\'est l\'un des plus grands musées du monde, et le plus grand de Paris, par sa surface d\'exposition de 60 600 m27',
            'hotel_id' => 2,
            'user_id' => 2,
            'type_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ne passez pas la soiree tout seul',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,0,0),
            'location' => 'Salle de detente',
            'description' => "Une soirée désigne un rassemblement de personnes, invitées ou non par un organisateur dans un même lieu (restaurant, bar, maison, appartement, plage, parc etc.), dans le but de socialiser, de parler ou de se divertir.",
            'hotel_id' => 2,
            'user_id' => 1,
            'type_id' => 4
        ]);
    }
}
