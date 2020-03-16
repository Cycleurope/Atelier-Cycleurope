<?php

use Illuminate\Database\Seeder;
use App\Models\Reason;


class ReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reason = Reason::create(['name' => 'Casse']);
        $reason = Reason::create(['name' => 'Dysfonctionnement mécanique']);
        $reason = Reason::create(['name' => 'Dysfonctionnement électrique']);
        $reason = Reason::create(['name' => 'Défaut Esthétique']);
    }
}
