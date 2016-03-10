<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types_activities')->insert([
        'name' => 'Culturelle',
        'image' => 'musee.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Detente',
            'image' => 'jacuzzi.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Sportive',
            'image' => 'accrobranche.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Ballade',
            'image' => 'randonnee.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Musique',
            'image' => 'concert.jpg'
        ]);
    }
}
