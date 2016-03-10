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
            'description' => 'Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.',
            'hotel_id' => 1,
            'user_id' => 1,
            'type_id' => 3
        ]);

        DB::table('activities')->insert([
            'name' => 'Le Louvre',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,30,0),
            'location' => 'Paris',
            'description' => 'Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.',
            'hotel_id' => 2,
            'user_id' => 1,
            'type_id' => 1
        ]);

        DB::table('activities')->insert([
            'name' => 'Ne passez pas la soiree tout seul',
            'date_activity' => \Carbon\Carbon::create(2016,04,25,11,0,0),
            'location' => 'Salle de detente',
            'description' => 'Et Epigonus quidem amictu tenus philosophus, ut apparuit, prece frustra temptata, sulcatis lateribus mortisque metu admoto turpi confessione cogitatorum socium, quae nulla erant, fuisse firmavit cum nec vidisset quicquam nec audisset penitus expers forensium rerum; Eusebius vero obiecta fidentius negans, suspensus in eodem gradu constantiae stetit latrocinium illud esse, non iudicium clamans.',
            'hotel_id' => 2,
            'user_id' => 2,
            'type_id' => 4
        ]);
    }
}
