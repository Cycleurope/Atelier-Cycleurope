<?php

use Illuminate\Database\Seeder;
use App\Models\Season;

class SeasonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Season::create([
            'name' => 'Saison 2020 - 2021',
            'year' => 2020,
        ]);

        Season::create([
            'name' => 'Saison 2019 - 2020',
            'year' => 2019,
        ]);

        Season::create([
            'name' => 'Saison 2018 - 2019',
            'year' => 2018,
        ]);

        Season::create([
            'name' => 'Saison 2017 - 2018',
            'year' => 2017,
        ]);
    }
}
