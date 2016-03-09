<?php

use Illuminate\Database\Seeder;

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
            'image' => 'spa.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Sportive',
            'image' => 'sport-nozay.jpg'
        ]);
        DB::table('types_activities')->insert([
            'name' => 'Discussion',
            'image' => 'bar.jpg'
        ]);
    }
}
