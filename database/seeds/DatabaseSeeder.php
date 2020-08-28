<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TeamsTableSeeder::class);
        $this->call(CollegeTableSeeder::class);
        $this->call(DraftYearsTableSeeder::class);
        $this->call(DraftRanksTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
    }
}
