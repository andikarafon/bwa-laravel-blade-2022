<?php


declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Managers;
use App\Illuminate\Database\Seeder;
use App\Illuminate\Support\Facades\DB;

class ManagersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate DB
        DB::table('managers')->truncate();

        $managers = [
            [ 
                'clubs_id'      => 1,
                'photo'         => 'https:://resources.premierleague.com/premierleague/photos/players/250*250/man39237.png',
                'name'          => 'Thomas Tuchel',
                'old'           => '47',
                'nationality'   => 'Germany',
                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                'updated_at'    => '2022-03-16 00:00:00',
            ],
            [ 
                'clubs_id'      => 2,
                'photo'         => 'https:://resources.premierleague.com/premierleague/photos/players/250*250/man51018.png',
                'name'          => 'Mikel Arteta',
                'old'           => '38',
                'nationality'   => 'Spain',
                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                'updated_at'    => '2022-03-16 00:00:00',
            ],
            [ 
                'clubs_id'      => 3,
                'photo'         => 'https:://resources.premierleague.com/premierleague/photos/players/250*250/man37974.png',
                'name'          => 'Josep Guardiola',
                'old'           => '50',
                'nationality'   => 'Spain',
                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                'updated_at'    => '2022-03-16 00:00:00',
            ],
            [ 
                'clubs_id'      => 5,
                'photo'         => 'https:://resources.premierleague.com/premierleague/photos/players/250*250/man279.png',
                'name'          => 'Jurgen Klopp',
                'old'           => '53',
                'nationality'   => 'Germany',
                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                'updated_at'    => '2022-03-16 00:00:00',
            ],
            [ 
                'clubs_id'      => 6,
                'photo'         => 'https:://resources.premierleague.com/premierleague/photos/players/250*250/man134.png',
                'name'          => 'Jose Maurinho',
                'old'           => '58',
                'nationality'   => 'Portugal',
                'created_at'    => '2022-03-16 00:00:00', //timestamp (lihat di migration)
                'updated_at'    => '2022-03-16 00:00:00',
            ],
        ];

        Managers::insert($managers);
    }
}
