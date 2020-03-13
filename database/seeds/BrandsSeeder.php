<?php

use Illuminate\Database\Seeder;
use App\Models\Brand;
class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name' => 'Peugeot Cycles',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Gitane',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Bianchi',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Campagnolo',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Bosch',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'DT Swiss',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'FSA',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Fox',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Mach 1',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Magura',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Mavic',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Manitou',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Rotor',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Shimano',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Sram',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'SR Suntour',
            'description' => '',
        ]);

        Brand::create([
            'name' => 'Tektro',
            'description' => '',
        ]);
    }
}
