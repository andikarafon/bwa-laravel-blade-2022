<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Clubs;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $clubs = [ 
                            [
                                'stadiums_id'      =>   '1',
                                'name'          => 'Chelsea FC',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t8.svg',
                                'url'           => 'www.chelsea.com',
                                'throphy'       => 19,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                            [
                                'stadiums'      =>   '2',
                                'name'          => 'Arsenal',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t3.svg',
                                'url'           => 'www.arsenal.com',
                                'throphy'       => 8,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                            [
                                'stadiums'      =>   '3',
                                'name'          => 'Manchester United',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t1.svg',
                                'url'           => 'www.manutd.com',
                                'throphy'       => 20,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                            [
                                'stadiums'      =>   '4',
                                'name'          => 'Manchester City',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t43.svg',
                                'url'           => 'www.mancity.com',
                                'throphy'       => 12,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                            [
                                'stadiums'      =>   '5',
                                'name'          => 'Liverpool',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t14.svg',
                                'url'           => 'www.liverpoolfc.com',
                                'throphy'       => 11,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                            [
                                'stadiums'      =>   '6',
                                'name'          => 'Tottenham Hotspur',
                                'logo'          => 'https://resources.premierleague.com/premierleague/badges/t6.svg',
                                'url'           => 'www.tottenhamhotspur.com',
                                'throphy'       => 1,
                                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                                'updated_at'    => '2022-03-16 00:00:00',
                            ],
                ];

                Clubs::insert($clubs);
    }
}
