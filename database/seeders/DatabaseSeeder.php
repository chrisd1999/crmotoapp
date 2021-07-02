<?php

namespace Database\Seeders;

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
        $this->call([
            AdminSeeder::class,
            // TrackSeeder::class,
        ]);

        \App\Models\Track::factory(10)->create();
        \App\Models\Location::factory(10)->create();
        \App\Models\Event::factory(20)->create();
    }
}
