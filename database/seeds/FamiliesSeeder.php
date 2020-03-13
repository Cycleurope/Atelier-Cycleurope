<?php

use Illuminate\Database\Seeder;
use App\Models\Family;

class FamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Family::create(['name' => 'e-Urbain']);
        Family::create(['name' => 'e-Trekking']);
        Family::create(['name' => 'e-VTT']);
        Family::create(['name' => 'Urbain']);
        Family::create(['name' => 'VTT']);
        Family::create(['name' => 'Legend']);
        Family::create(['name' => 'Trekking']);
        Family::create(['name' => 'Junior']);
    }
}
