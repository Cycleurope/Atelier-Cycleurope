<?php

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
        
        // $this->call(UsersTableSeeder::class);
        // $this->call(DoctypesSeeder::class);
        // $this->call(BrandsSeeder::class);
        // $this->call(PhonebookSeeder::class);
        // $this->call(QuestionsAnswersSeeder::class);
        // $this->call(VideosSeeder::class);
        // $this->call(FamiliesSeeder::class);
        // $this->call(SeasonsSeeder::class);
        // $this->call(ProductsSeeder::class);
        $this->call(ReasonsTableSeeder::class);

    }
}
