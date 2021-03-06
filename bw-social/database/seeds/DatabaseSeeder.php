<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(TypeActivitiesTableSeeder::class);
        $this->call(ConversationsTableSeeder::class);
        $this->call(ConversationsUsersTableSeeder::class);
        $this->call(ConversationsMessagesTableSeeder::class);
    }
}
