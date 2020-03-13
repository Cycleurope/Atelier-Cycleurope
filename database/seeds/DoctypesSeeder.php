<?php

use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DoctypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentType::create([
            'name' => 'Fiches Techniques',
            'slug' => 'fiches-techniques',
        ]);

        
    }
}
