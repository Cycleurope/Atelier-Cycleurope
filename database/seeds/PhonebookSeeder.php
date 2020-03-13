<?php

use Illuminate\Database\Seeder;
use App\Models\Phonecard;

class PhonebookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phonecard::create([
            'title'      => 'BOSCH e-Bike',
            'phone'     => '00 800 00 22 44 88 / FR : 0157329438',
            'email'     => 'service@bosch-ebike.fr',
        ]);

        Phonecard::create([
            'title'      => 'CAMPAGNOLO',
            'phone'     => '04 77 55 63 05 ',
            'email'     => 'commercial@campagnolo.fr'
        ]);

        Phonecard::create([
            'title'      => 'DT SWISS',
            'phone'     => '04 92 60 90 58',
            'email'     => 'sav.online@dtswissfrance.com'
        ]);

        Phonecard::create([
            'title'      => 'FULCRUM',
            'phone'     => 'Prendre contact avec Campagnolo France',
            'email'     => ''
        ]);

        Phonecard::create([
            'title'      => 'FSA France',
            'phone'     => '04 79 84 36 80',
            'email'     => 'sav@@esm-sport.com'
        ]);


        Phonecard::create([
            'title'      => 'FOX France',
            'phone'     => '04 94 54 79 35',
            'email'     => 'contact@foxservice.fr'
        ]);

        Phonecard::create([
            'title'      => 'MACH 1',
            'phone'     => '04 77 54 40 75',
            'email'     => 'composants@mach1.fr'
        ]);

        Phonecard::create([
            'title'      => 'MAGURA',
            'phone'     => '00 800 00 22 44 88',
            'email'     => 'sav_france@magura.de'
        ]);

        Phonecard::create([
            'title'      => 'MAVIC',
            'phone'     => '09 75 18 40 03 ',
            'email'     => ''
        ]);

        Phonecard::create([
            'title'      => 'MANITOU',
            'phone'     => '05 82 95 20 61 ',
            'email'     => 'contact@axoreo.com'
        ]);


        Phonecard::create([
            'title'      => 'ROTOR France',
            'phone'     => '03 61 51 19 72',
            'email'     => 'contact@rotorfrance.com'
        ]);

        Phonecard::create([
            'title'      => 'SHIMANO',
            'phone'     => '03 21 73 25 25 ',
            'email'     => 'contact-France@shimano-eu.com'
        ]);

        Phonecard::create([
            'title'      => 'SRAM',
            'phone'     => '04 79 84 57 00',
            'email'     => ''
        ]);

        Phonecard::create([
            'title'      => 'SR SUNTOUR',
            'phone'     => '04 79 28 69 71',
            'email'     => 'sav@srsuntour-cycling.com'
        ]);

        Phonecard::create([
            'title'      => 'TEKTRO',
            'phone'     => '04 81 16 05 57',
            'email'     => ''
        ]);
    }
}
