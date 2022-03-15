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
        //sebelum php artisan migrate, maka daftarkan dulu semua seeder yang telah dibuat
        $this->call([
            StadiumsTableSeeder::class,
            ClubsTableSeeder::class,
            ManagersTableSeeder::class,
            PlayersTableSeeder::class,
            MatchesTableSeeder::class,
        ]);

    }
}
