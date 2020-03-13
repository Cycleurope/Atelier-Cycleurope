<?php

use Illuminate\Database\Seeder;
use App\Models\Video;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'title' => 'The new Performance Line CX: Features explained',
            'brand_id' => 5,
            'url' => 'https://www.youtube.com/watch?v=ZuhKoNxQVgs'
        ]);

        Video::create([
            'title' => 'Bosch Performance CX (2020) vs old CX and E8000 - eBike motor test',
            'brand_id' => 5,
            'url' => 'https://www.youtube.com/watch?v=fz6tOtQ0kQY'
        ]);

        Video::create([
            'title' => 'Les nouveautés Bosch VAE pour 2020 !',
            'brand_id' => 5,
            'url' => 'https://www.youtube.com/watch?v=YEhvUczfPn8'
        ]);
    }
}
