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
            'description' => 'Le golf est un sport de précision se jouant en plein air, qui consiste à envoyer une balle dans un trou à l\'aide de clubs. Le but du jeu consiste à effectuer, sur un parcours défini, le moins de coups possible. Précision, endurance, technicité, concentration sont des qualités indispensables pour cette activité.

Codifié en Écosse en 1754 par le Royal & Ancient Golf Club de Saint Andrews, ce sport a des origines diverses dont le jeu de mail. Il fut ainsi importé des Pays-Bas où il était pratiqué sous le nom de « colf » dès le xiiie siècle.

Le golf ne prend son essor qu\'en deuxième partie du xixe siècle avec l\'arrivée du professionnalisme et des clubs privés en Écosse puis en Angleterre, où est mis en place en 1860 le premier Open britannique disputé par des professionnels ; puis au début du xxe siècle. Des épreuves de golf sont disputées lors des Jeux olympiques de Paris 1900 et de nouveau en 1904 à Saint-Louis, puis le sport disparait du programme pour 112 ans.',
            'hotel_id' => 1,
            'user_id' => 1,
            'type_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Le Louvre',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,30,0),
            'location' => 'Paris',
            'description' => 'Le musée du Louvre est un musée d\'art et d\'antiquités situé au centre de Paris dans le palais du Louvre. C\'est l\'un des plus grands musées du monde, et le plus grand de Paris, par sa surface d\'exposition de 60 600 m27, et ses collections qui comprennent près de 460 000 œuvres. Celles-ci présentent l\'art occidental du Moyen Âge à 1848, ceux des civilisations antiques qui l\'ont précédé et influencé (orientales, égyptienne, grecque, étrusque et romaine), et les arts des premiers chrétiens et de l\'Islam.',
            'hotel_id' => 2,
            'user_id' => 2,
            'type_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ne passez pas la soiree tout seul',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,0,0),
            'location' => 'Salle de detente',
            'description' => 'Une "soirée" désigne un rassemblement de personnes, invitées ou non par un organisateur dans un même lieu (restaurant, bar, maison, appartement, plage, parc etc.), dans le but de socialiser, de parler ou de se divertir.

Les éléments caractéristiques d\'une soirée sont la présence de nourriture et de boissons ; elles sont généralement accompagnées de musique et de danse. Comme leur nom l\'indique, les soirées se déroulent en fin d\'après-midi, le soir ou de nuit.

Certaines soirées sont organisées en l\'honneur d\'une personne en particulier, d\'un jour ou d\'un événement (dans certains cas on parle aussi de fête)',
            'hotel_id' => 2,
            'user_id' => 1,
            'type_id' => 4
        ]);
    }
}
